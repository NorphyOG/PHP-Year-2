<!DOCTYPE HTML>
<html>
<head>

    <meta charset="UTF-8">
    <img src="Bilder/Logo.png" width="70" height="70">
    <title>All Songs | BiboJ</title>
</head>
<body>

<h1 style="align-content: center">BiboJ</h1>

<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/BiboJ/songs.php
// http://web.bg.bib.de/phpMyAdmin

require 'dbConnect.php';


$count = 24; //Number of Songs



$a = '<form action="playSong.php" method="post">';

$a .= ' <table style="width:100%" border="1">
        <tr>
            <th>Songs</th>
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
    $sql = "SELECT * FROM song WHERE SongID = $i";
    foreach ($pdo->query($sql) as $r);


    if ($count1 == 0) {
        $a .= '<tr>';
    }
    if ($count1 <= 6) {
        $a .= '<td><img src="' . $r['bildWeg'] . '" alt="Bild" height="200" width="200"><br><input type="checkbox"  value="' . $r['SongID'] . '" name="songs[]"><a>'. $r['Titel'] . '</a><br><a>' . $r['Songdauer'] . '</a></td>';
        $count1++;
    }
    if ($count1 >= 6) {
        $a .= '</tr>';
        $count1 = 0;
    }


}

$a .= '</table>
            </th>
        </tr>
    </table><br><a>Willst du deine Playlist per Mail Bekommen?</a><br><b>Email: </b><input type="email" name="email"><br><br><input type="submit" value="Erstellen"></form>';
echo $a;
?>



</body>


</html>