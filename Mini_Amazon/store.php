<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <title>Store | Mini Amazon</title>
</head>
<body>

<h1 style="align-content: center">Mini Amazon</h1>

    <?php

    // http://bbm3h20awe.web.bg.bib.de/PHP/Mini_Amazon/store.php
    // http://web.bg.bib.de/phpMyAdmin

    require 'dbConnect.php';


    $count = 7; //Number of Products



    $a = '<form action="checkout.php" method="post">';

    $a .= ' <table style="width:100%" border="1">
        <tr>
            <th>Produkte</th>
        </tr>
        <tr>
            <th>
                <table style="width:100%">
                    <tr>
                        <th><br></th>
                        <th><br></th>
                        <th><br></th>
                        <th><br></th>
                        <th><br></th>
                        <th><br></th>';


    $count1 = 0;
    for ($i = 1; $i < $count + 1; $i++){
        $sql = "SELECT * FROM az_produkte WHERE proid = $i";
        foreach ($pdo->query($sql) as $r);

        if ($r['stock'] != 0) {
            if ($count1 == 0) {
                $a .= '<tr>';
            }
            if ($count1 <= 6) {
                $a .= '<td><img src="' . $r['bildWeg'] . '" alt="Bild" height="100" width="100"><br><input type="checkbox"  value="' . $r['proid'] . '" name="product[]"><a>'. $r['name'] . '</a><br><a>' . $r['preis'] . '€</a></td>';
                $count1++;
            }
            if ($count1 >= 6) {
                $a .= '</tr>';
                $count1 = 0;
            }
        } else {
            if ($count1 == 0) {
                $a .= '<tr>';
            }
            if ($count1 <= 6) {
                $a .= '<td><img src="Bilder/out-of-stock.jpg" alt="Out Of Stock" height="100" width="100" ><br><a>'. $r['name'] . '</a><br><a>' . $r['preis'] . '€</a></td>';
                $count1++;
            }
            if ($count1 >= 6) {
                $a .= '</tr>';
                $count1 = 0;
            }
        }



    }

    $a .= '</table>
            </th>
        </tr>
    </table><br><a>Willst du deine Bestellung per Mail Bekommen?</a><br><b>Email: </b><input type="email" name="email"><br><br><input type="submit" value="Kaufen"></form>';
    echo $a;
    ?>



</body>


</html>