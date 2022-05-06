<!Doctype html>
<html>
<head>
    <title>Weltuhr</title>
    <meta charset="utf-8">
</head>
<body>
<?php
// http://bbm3h20awe.web.bg.bib.de/PHP/Date/Weltuhr.php
header("Refresh:0.5");

$tz = 'CET';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz));
$dt->setTimestamp($timestamp);

echo "<font size='100px' style='padding-left: 40%'><a>" . $dt->format('d.m.Y, H:i:s') . "</a></font>";

?>
</body>
</html>