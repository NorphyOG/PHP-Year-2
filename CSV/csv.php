<?php

$csv = 'kunden.csv';
$fp = fopen($csv, 'r');

echo "<table border='1'>";

while ($z = fgetcsv($fp, 1024, ";")) {
    echo "<tr>";
    for ($i = 0; $i < count($z) - 1; $i++) {
        echo '<td>' . $z[$i] . '</td>';

    }
    echo "</td>";
}
echo '</table>';
