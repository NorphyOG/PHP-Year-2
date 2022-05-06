<html>
<head>
    <title>PHP Databank | Show</title>
</head>

<body>

<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/Project/show.php
// http://web.bg.bib.de/phpMyAdmin

require 'connection.php';

if (isset($_GET['PersonID'])) {
    $sql = "DELETE FROM `pr_mitarbeiter` WHERE `pr_mitarbeiter`.`PersonID` = " . $_GET['PersonID'];
    $pdo->query($sql);
}

$o = '<table border="1">';
$o .= '<tr></th><th><br></th><th><br></th><th>PersonID</th><th>Nachname</th><th>Vorname</th><th>Steuerklasse</th><th>Anzahl der Kinder</th><th>Bruttogehalt</th><th>Prozentsatz</th><th>Arbeitsnehmeranteil</th><th>Provision</th><th>Arbeitsgeberzuschlag</th><th></th><th>Lohnsteuer</th><th>Kirschensteuer</th><th></th><th>Versicherrungsabgeben</th><th><br></th><th>Gesamtbrutto</th><th>Nettogehalt</th><th>Auszahlung</th></tr>';

$array0 = array();
$array1 = array();
$arrayOut0 = array();
$arrayOut1 = array();

$i = 0;
foreach ($pdo->query('SELECT * FROM pr_steuer') as $a) {
    $f = '
                        <td><-></td>
                        <td>' . $a['Lohnsteuer'] . '</td>   
                        <td>' . $a['Kirschensteuer'] . '</td> ';

    $array0[$i] = $f;
    $arrayOut0[$i] = $a['Lohnsteuer'] . "," . $a['Kirschensteuer'];
    $i++;
}

$i = 0;
foreach ($pdo->query('SELECT * FROM pr_versicherrung') as $b) {
    $f = '
                        <td><-></td>
                        <td>' . $b['Versicherrungsabgeben'] . '</td> ';

    $array1[$i] = $f;
    $arrayOut1[$i] = $b['Versicherrungsabgeben'];
    $i++;
}

$i = 0;
foreach ($pdo->query('SELECT * FROM pr_mitarbeiter') as $r) {
    $o .= '<tr>
                        <td><a href="edit.php?id=' . $r['PersonID'] . '">Edit</a></td>
                        <td><a href="?id=' . $r['PersonID'] . '">Delete</a></td>
                        <td>' . $r['PersonID'] . '</td>
                        <td>' . $r['Nachname'] . '</td>
                        <td>' . $r['Vorname'] . '</td>
                        <td>' . $r['Steuerklasse'] . '</td>
                        <td>' . $r['anzahlKinder'] . '</td>   
                        <td>' . $r['Bruttogehalt'] . '</td>     
                        <td>' . $r['Prozentsatz'] . '</td>     
                        <td>' . $r['Arbeitsnehmeranteil'] . '</td>  
                        <td>' . $r['Provision'] . '</td>         
                        <td>' . $r['Arbeitsgeberzuschlag'] . '</td> ';

    $arrayKek = explode(",", $arrayOut0, -1);


    $out = $r['Bruttogehalt'] + $r['Provision'];
    $out1 = $out - ($arrayKek[0] + $arrayKek[1]) - $arrayOut1[$i];
    $out2 = $out1 - $r['Arbeitsnehmeranteil'];

    $o .= $array0[$i];
    $o .= $array1[$i];

    $o .= '<td><-></td><td>' . $out . '</td> ';
    $o .= '<td>' . $out1 . '</td> ';
    $o .= '<td>' . $out2 . '</td> ';
    $i++;

}


$o .= '</tr></table><br><hr>';
echo $o;

?>

</body>

</html>
