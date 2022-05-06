<!doctype html>
	<html>
	<head>
		<title>Zahlenraten</title>
	</head>	
	<body>	
	<?php
	   // URL: http://bbm3h20awe.web.bg.bib.de/PHP/Test01/z.php
		$out = '';
		$out1 = '';
		$g = false;
        $win = false;


		if(isset($_POST['sub'])) {			
			// User hat sub-Button gedrückt
			$e = $_POST['Eingabe'];
			$z = $_POST['Zufallszahl'];
			$round = $_POST['versuch'];

			if ( $e > $z ) {
				$out = "Ihre Eingabe ist zu groß.";				
			} else if ( $e < $z ) {
				$out = "Ihre Eingabe ist zu klein.";
			} else {
				$out = "Richtig!";
				$g = true;
                $win = true;

                switch ($round) {
                    case 1:
                        $out1 = "ERSTER VERSUCH DU HURENSON DU HAST ES GESCHAFFT!!!!!!";
                        break;
                    case 2:
                        $out1 = "Okey, Okey Es ist der Zweite Versuch... Entwieder hattest du glück oder du bist auch ein HURENSON!!!!";
                        break;
                    case 3:
                        $out1 = "Dritter Versuch, Ja es zwar gut aber kein vergleich zum Ersten oder Zweiten du NUTTE!!!!!";
                        break;
                    case 4:
                        $out1 = "Fühlst du dich jetzt? Es ist nur der Vierte Versuch einfach Lame du KEK!!!";
                        break;
                    case 5:
                        $out1 = "Schlecht... Fünfter Versuch....                                               BASTERT!!!!!!";
                        break;
                    case 6:
                        $out1 = "Wenn du Tim bist ist es keine Leistung nicht Erster zu sein... Sexter Verusch...";
                        break;
                    case 7:
                        $out1 = "Sieben hahaahahaha Das ist einfach Lecherlich wie schlecht du bist keliner NUTTENSON MIT AFFENVATER!!!!";
                        break;
                    default:
                        $out1 = "Es ist um einiges mehr als du dir Vorstellen kannst, FICK DICH!";
                        break;

                }
			}

            if (!$win) {
                $out1 = "Versuch Nr. " . $round;
            }
            $round++;
		} else {
			// Beim ersten Laden der Seite
			$z = rand(1,100);
            $round = 0;
			//echo "Zufallszahl: $z";
		}
		echo $out . '<br>';
        echo $out1;
		if (!$g) {
	?>	
	<form method="post">
		Eingabe:<br>
		<input name="Eingabe"> 
		<input type="hidden" name="Zufallszahl" value="<?php echo $z ?>">
		<input type="hidden" name="versuch" value="<?php echo $round ?>">
		<input type="submit" name="sub" value="Senden">
	</form>
	<?php
		}
	?>
	</body>
</html>