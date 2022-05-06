<?php

//http://bbm3h20awe.web.bg.bib.de/PHP/Project/pdf_tool/pdf.php

require 'fpdf.php';
require '../connection.php';

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 24);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(90, 10, "Project - Datanbank");

if (isset($_GET['PersonID'])) {
    $sql = "DELETE FROM `pr_mitarbeiter` WHERE `pr_mitarbeiter`.`PersonID` = " . $_GET['PersonID'];
    $pdo->query($sql);
}

$array0 = array();
$array1 = array();

$i = 0;
foreach ($pdo->query('SELECT * FROM pr_steuer') as $a) {
    $f = ",Lohnsteuer:"  . $a['Lohnsteuer'] .
        ",Kirschensteuer:" . $a['Kirschensteuer'];

    $array0[$i] = $f;
    $i++;
}

$i = 0;
foreach ($pdo->query('SELECT * FROM pr_versicherrung') as $b) {
    $f = ",Versicherrungsabgeben:" . $b['Versicherrungsabgeben'];

    $array1[$i] = $f;
    $i++;
}

$o = "";
$i = 0;
foreach ($pdo->query('SELECT * FROM pr_mitarbeiter') as $r) {
    $o .= ",PersonID:" . $r['PersonID'] .
        ",Nachname:" . $r['Nachname'] .
        ",Vorname:" . $r['Vorname'] .
        ",Steuerklasse:" . $r['Steuerklasse'] .
        ",anzahlKinder:" . $r['anzahlKinder'] .
        ",Bruttogehalt:" . $r['Bruttogehalt'] .
        ",Prozentsatz:" . $r['Prozentsatz'] .
        ",Arbeitsnehmeranteil:" . $r['Arbeitsnehmeranteil'] .
        ",Provision:" . $r['Provision'] .
        ",Arbeitsgeberzuschlag:" . $r['Arbeitsgeberzuschlag'];

    $o .= $array0[$i];
    $o .= $array1[$i];
    $i++;

}
$pdf->SetFont('Arial', 'B', 11);

$array2 = explode(",", $o, -1);

for ($i = 0, $c = 30, $ka = 0, $page = 0; $i < count($array2); $i++) {
    $pdf->Text(5, $c, $array2[$i]);
    $c = $c + 5;

    if ($ka == 13) {
        $c = $c + 10;
        $ka = 0;
        $page++;
        if ($page == 3) {
            $c = 30;
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 24);
            $pdf->Cell(90, 10, "Project - Datanbank");
            $pdf->SetFont('Arial', 'B', 11);

            $page = 0;
        }
    }
    $ka++;
}

$pdf->SetCreator("Jerome Weber", true);
$pdf->Output();

