<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout | Mini Amazon</title>
</head>
<body>

<h1>Checkout | Mini Amazon</h1>
<a href="store.php"><button>Zurück</button></a><br><br>

<form action="bestellung.php" method="post">
<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/Mini_Amazone/checkout.php
// http://web.bg.bib.de/phpMyAdmin

require "dbConnect.php";

$gesPreis = 0.0;

if (isset($_POST['product'])) {

    $a = '<table style="width:100%" border="1">
    <tr>
        <th>Warenkorb</th>
    </tr>';


    foreach($_POST['product'] as $item) {
        $sql = "SELECT * FROM az_produkte WHERE proid = $item";
        foreach ($pdo->query($sql) as $r);

        $a .= '<tr><td><img src="' . $r['bildWeg'] . '" alt="Bild" height="100" width="100"><div><strong style="margin-left: 5px">'. $r['name'] .'</strong><a style="position: absolute; right: 70px; width: 80px; margin-top: -10px">Stock: x'. $r['stock'] .'</a><a style="position: absolute; right: 10px; width: 45px; border: 2px solid #000000; padding: 5px; margin-top: -20px">'. $r['preis'] .'€</a></div></td></tr>';
        $gesPreis = $gesPreis + $r['preis'];
    }
    $a .= '<tr><td><div style="padding: 10px"><b>Gesamtwert: </b><a style="position: absolute; right: 10px; width: 45px; border: 3px solid #000000; padding: 5px; margin-top: -8px">'. $gesPreis .'€</stronga></div></tr></td></table>';
    echo $a;

} else {
    $a = '<tr><td><div align="center"><h2>Kein Inhalt</h2></div></td></tr>';
    echo $a;
}

$mail = 'Deine Bestellung: ' . PHP_EOL . PHP_EOL;

foreach($_POST['product'] as $item) {
    $sql = "SELECT * FROM az_produkte WHERE proid = $item";
    foreach ($pdo->query($sql) as $r);
    $mail .= $r['name'] . ' x1 -> ' . $r['preis'] . '€' . PHP_EOL;
}

$mail .= PHP_EOL . 'Gesamtwert: ' . $gesPreis . '€';


mail($_POST['email'], 'Bestellung von Mini Amazon', $mail, '', '');

header("Location:bestellung.php?name=".$_POST['product']);

?>

    <br>
    <input type="submit" value="Bestellen" onclick="onClick()" >
</form>

<script>

    function onClick() {
        var result = "<?php $bol = true; ?>"
        document.write(result);
    }

</script>

</body>

</html>