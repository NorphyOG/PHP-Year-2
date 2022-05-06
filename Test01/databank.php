<html>
<head>
    <title>PHP Databank</title>
</head>

<body>

<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/Test01
// http://web.bg.bib.de/phpMyAdmin


echo '<div align?"center">
		<a href="kunde_new.php">Neuer Kunde</a>
		<a href="kunden_edit.php">Kunden anzeigen</a>
	</div><hr>';


require 'databank_connection.php';

if (isset($_GET['id'])) {
    $sql = "DELETE FROM `kunde` WHERE `kunde`.`id` = " . $_GET['id'];
    $pdo->query($sql);
}

$o = '<table border="1">';
$o .= '<tr><th>id</th><th>Nachname</th><th>Vorname</th><th>Email</th><th><br></th><th><br></th></tr>';
    foreach ($pdo->query('SELECT * FROM kunde') as $r) {
        $o .= '<tr>
                        <td>' . $r['id'] . '</td>
                        <td>' . $r['nachname'] . '</td>
                        <td>' . $r['vorname'] . '</td>
                        <td>' . $r['email'] . '</td>
                        <td><a href="?id=' . $r['id'] . '">Delete</a></td>
                        <td><a href="kunden_edit.php?id=' . $r['id'] . '">Edit</a></td>
                </tr>';
    }

$o .= '</table><br><hr>';
echo $o;


?>

</body>

</html>



