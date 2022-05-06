
<!doctype html>
<html>
<head>
    <title>Kunden Editieren</title>
    <meta charset="utf-8">
</head>
<body>
<?php

require 'databank_connection_bbm3h20awe.php';
$sql = "SELECT * FROM kunden WHERE id = " . $_GET['id'];
foreach ($pdo->query($sql) as $r);

?>
<a href="main.php"><button>Zurück</button></a>
<form method="post">
    <br>
    Vorname:<br><input  value="<?php echo $r['vorname'] ?>">
    <br><br>
    Nachname:<br><input value="<?php echo $r['nachname'] ?>">
    <br><br>
    Straße:<br><input value="<?php echo $r['strasse'] ?>">
    <br><br>
    PLZ:<br><input value="<?php echo $r['plz'] ?>">
    <br><br>
    Email:<br><input type="Email" value="<?php echo $r['email'] ?>">
    <br><br>
    Geb. Datum:<br><input type="date" value="<?php echo $r['geb'] ?>">
    <br><br>
    Geschlecht:<br><input value="<?php echo $r['geschlecht'] ?>">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
    <br><br>
    <input type="submit" name="edit" value="Ändern">
</form>
</body>
</html>