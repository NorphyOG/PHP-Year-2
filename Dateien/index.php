<!DOCTYPE>
<html>
<head>
    <title>Dateien</title>
</head>
<body>

<?php

// http://bbm3h20awe.web.bg.bib.de/PHP/

if (isset($_POST["submit"])) {


    //File 1
    if (isset($_FILES["Datei1"])) {

        echo "<br>File 1: <br>";

        foreach ($_FILES["Datei1"] as $FILE => $vFILE) {
            echo "$FILE:$vFILE<br>";
        }


        $tmp1 = $_FILES["Datei1"]["tmp_name"];
        $n1 = $_FILES["Datei1"]["name"];
        $target = "Uploads/$n1";

        if (move_uploaded_file($tmp1, $target)){
            echo "<br>Die Datei wurde Erfolgreich Hochgeladen";
            echo "<br><img src='$target'>";
        } else {
            echo "<br>Die Datei wurde nicht Hochgeladen";
        }


    }

    //File 2
    if (isset($_FILES["Datei2"])) {

        echo "<br>File 2: <br>";

        foreach ($_FILES["Datei2"] as $FILE => $vFILE) {
            echo "$FILE:$vFILE<br>";
        }


        $tmp2 = $_FILES["Datei2"]["tmp_name"];
        $n2 = $_FILES["Datei2"]["name"];
        $target = "Uploads/$n2";

        if (move_uploaded_file($tmp2, $target)){
            echo "<br>Die Datei wurde Erfolgreich Hochgeladen";
            echo "<br><img src='$target'>";
        } else {
            echo "<br>Die Datei wurde nicht Hochgeladen";
        }


    }

    //File 3
    if (isset($_FILES["Datei3"])) {

        echo "<br>File 3: <br>";

        foreach ($_FILES["Datei3"] as $FILE => $vFILE) {
            echo "$FILE:$vFILE<br>";
        }


        $tmp3 = $_FILES["Datei3"]["tmp_name"];
        $n3 = $_FILES["Datei3"]["name"];
        $target = "Uploads/$n3";

        if (move_uploaded_file($tmp3, $target)){
            echo "<br>Die Datei wurde Erfolgreich Hochgeladen";
            echo "<br><img src='$target'>";
        } else {
            echo "<br>Die Datei wurde nicht Hochgeladen";
        }


    }
}

?>

<form method="post" enctype="multipart/form-data">
    Dateien:
    <br>
    <input type="file" name="Datei1" accept="image/jpg">
    <br>
    <input type="file" name="Datei2" accept="image/jpg">
    <br>
    <input type="file" name="Datei3" accept="image/jpg">
    <br>
    <input type="submit" name="submit" value="Senden">
</form>
</body>
</html>