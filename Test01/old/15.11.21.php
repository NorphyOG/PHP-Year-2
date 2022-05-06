<html>
    <head>
        <title>PHP Testing</title>
    </head>

    <body>

        <?php

        // http://bbm3h20awe.web.bg.bib.de/PHP/Test01/15.11.21.php

        $name = array('Adrian', 'Johannes', 'Daniel', 'Benni', 'David', 'Tim', 'Fabio', 'Leon', 'Kevin', 'Jerome');

        for ($kNr = 0; $kNr < count($name) -1; $kNr++) {
            echo $name[rand(0, count($name))] . ' mag große lange Bananen!!' . '<br>';
        }
        echo '<br>';


        $data = array(
                array("Kunde",
                    array("Name", 'Johannes', 'Jerome', 'Adrian'),
                    array("Age", 18, 19, 17),
                    array("Sex", 'd', 'm', 'w')
                ),
            array("Bank",
                array("IBAN", 129042180923, 324432423724, 134123423233),
                array("BIC", 'BBCJOJOOP', 'ABCCOOPAL', 'LOOLADRIAN'),
                array("Bank Name", 'Commerzbank', 'Sparkasse', 'Deutsch Bank'),
                array("Balance", 79123, 52112, 4)
            )
        );


        for ($al = 0, $n1 = 2, $n2 = 3, $z1 = 0; $al < count($data[0]) -1; $al++, $n1--, $n2--, $z1++) {
            echo "<h1>Kunde " . ($al + 1) . "<h1/><h2></h2><br>";
            for ($kNr = 0; $kNr < count($data); $kNr++) {
                foreach ($data[$kNr] as $a) {
                    for ($f = 0; $f < count($a); $f++) {
                        if ($f == 0) {
                            continue;
                        }
                        if ($z1 < 2) {
                            if ($f == $n1) {
                                continue;
                            }
                            if ($f == $n2) {
                                continue;
                            }
                        } else {
                            $n1 = 1;
                            $n2 = 3;
                            if ($f == $n1) {
                                continue;
                            }
                            if ($f == $n2) {
                                continue;
                            }
                        }
                        echo "$a[$f]<br>";
                    }
                }
            }
            echo "<br>";
        }

        ?>


    </body>

</html>



