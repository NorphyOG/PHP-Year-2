<!DOCTYPE>
<html>
<head>
	<title>Wirdschaft</title>
</head>
<body>

<?php
	If(isset($_POST[“vorname”])){
		If(isset($_POST[“nachname”])){
			If(isset($_POST[“gebDate”])){
				foreach($_POST[“vorname”] as $vn){
					echo “$vn<br>”;
				}
			}
		}
	}
?>

	<form method=’post’>
		<input type=’text’ name=’vorname’>
		<input type=’text’ name=’nachname’>
		<input type=’date’ name=’gebDate’>
		<input type=’submit’ name=’submit’ value=’Senden’>
	</form>
</body>
</html>
