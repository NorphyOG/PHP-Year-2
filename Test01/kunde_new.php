<!doctype html>
<html>
<head>
    <title>Kunden Editieren</title>
    <meta charset="utf-8">
</head>
<body>
<?php

require 'databank_connection.php';
$sql = "SELECT * FROM kunde WHERE id = " . $_GET['id'];
foreach ($pdo->query($sql) as $r);

?>
<form method="post">
    Vorname:<br><input  value="<?php echo $r['vorname'] ?>">
    <br><br>Nachname:<br><input value="<?php echo $r['nachname'] ?>">
    <br><br>Email:<br><input type="Email" value="<?php echo $r['email'] ?>">
    <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
    <br><br><input type="submit" name="edit" value="Ändern">
</form>
</body>
</html>