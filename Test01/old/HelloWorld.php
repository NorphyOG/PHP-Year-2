<html>
    <head>
        <title>PHP Testing</title>
    </head>

    <body>

        <?php

        // http://bbm3h20awe.web.bg.bib.de/PHP/Test01/HelloWorld.php

        $username = 'Jerome';
        echo'<h1>Hello World '. $username . '<h1/>';

        echo'<script> alert("Guten Tag"); <script/>';

        if (isset($_POST['sub'])){
            echo "Der User hat den Submit button Gedrückt!";
        }


        ?>

        <form method="post">
            Eingabe:<br>
            <input name="Eingabe">
            <input type="submit" name="sub" value="Senden">
        </form>

    </body>

</html>



