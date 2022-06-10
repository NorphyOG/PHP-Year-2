<?php

require 'fpdf.php';
$anzahlOfAllImages = 200;
$bilderAnzahl = 50;
$imagesPerPage = 10;

$p = new FPDF();

$p -> AddPage();

function getRandomString($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

for ($i = 1, $page = 1; $i < $anzahlOfAllImages; $i++, $page++) {
    try {
        $p -> Image('Bilder/' . rand(1, $bilderAnzahl) . '.png', rand(1, 100), rand(1, 200), rand(20, 150), rand(20, 150), "png");
        if ($page == $imagesPerPage) {
            $page = 1;
            $p -> AddPage();
        }

        $p -> SetFont('Arial', 'B', rand(8, 30));

        $p -> Write(rand(0, 20), getRandomString(rand(5, 200)), "http://bbm3h20awe.web.bg.bib.de/fpdf181/_index.php");

    } catch (Exception $e) {
    }
}


$p -> Output();