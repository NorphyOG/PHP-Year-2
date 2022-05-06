
<!doctype html>
<html>
<head>
    <title>PHP Databank | Edit</title>
    <meta charset="utf-8">
</head>
<body>
<?php

require 'connection.php';
$sql = "SELECT * FROM pr_mitarbeiter WHERE PersonID = " . $_GET['PersonID'];
foreach ($pdo->query($sql) as $r);

?>
<a href="show.php"><button>Zurück</button></a>
<form method="post">
    <br>
    Nachname:<br><input value="<?php echo $r['Nachname'] ?>">
    <br><br>
    Vorname:<br><input  value="<?php echo $r['Vorname'] ?>">
    <br><br>
    Steuerklasse:<br><input value="<?php echo $r['Steuerklasse'] ?>">
    <br><br>
    Anzahl der Kinder:<br><input value="<?php echo $r['anzahlKinder'] ?>">
    <br><br>
    Bruttogehalt:<br><input value="<?php echo $r['Bruttogehalt'] ?>">
    <br><br>
    Prozentsatz:<br><input value="<?php echo $r['Prozentsatz'] ?>">
    <br><br>
    Arbeitsnehmeranteil:<br><input value="<?php echo $r['Arbeitsnehmeranteil'] ?>">
    <br><br>
    Provision:<br><input value="<?php echo $r['Provision'] ?>">
    <br><br>
    Arbeitsgeberzuschlag:<br><input value="<?php echo $r['Arbeitsgeberzuschlag'] ?>">
    <br><br>
    <input type="hidden" name="PersonID" value="<?php echo $r['PersonID'] ?>">
    <br><br>
    <input type="submit" name="edit" value="Ändern">
</form>
</body>
</html>