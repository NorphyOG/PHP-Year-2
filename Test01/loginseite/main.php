<html>
<head>
    <title>PHP Databank</title>
</head>

<body>

<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/Test01/loginseite/main.php
// http://web.bg.bib.de/phpMyAdmin

require 'databank_connection_bbm3h20awe.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM `kunde` WHERE `kunde`.`id` = " . $_GET['id'];
    $pdo->query($sql);
}

$o = '<table border="1">';
$o .= '<tr><th>id</th><th>Nachname</th><th>Vorname</th><th>Straße</th><th>PLZ</th><th>E-Mail</th><th>Geb. Datum</th><th>Tel. Nummer</th><th>Geschlecht</th></th><th><br></th><th><br></th></tr>';
foreach ($pdo->query('SELECT * FROM kunden') as $r) {
    $o .= '<tr>
                        <td>' . $r['id'] . '</td>
                        <td>' . $r['nachname'] . '</td>
                        <td>' . $r['vorname'] . '</td>
                        <td>' . $r['strasse'] . '</td>
                        <td>' . $r['plz'] . '</td>   
                        <td>' . $r['email'] . '</td>     
                        <td>' . $r['geb'] . '</td>     
                        <td>' . $r['telnr'] . '</td>  
                        <td>' . $r['geschlecht'] . '</td>         
                        <td><a href="?id=' . $r['id'] . '">Delete</a></td>
                        <td><a href="edit.php?id=' . $r['id'] . '">Edit</a></td>
                </tr>';
}

$o .= '</table><br><hr>';
echo $o;


?>

</body>

</html>
