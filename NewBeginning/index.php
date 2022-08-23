<?php
require "dbconnection.php";

echo "<!DOCTYPE HTML> 
<html>
<head>
    <title>Login | SystemUI</title>
    <link href='login_style.css' rel='stylesheet'>
</head>
<body>
<div>";

$sql = "SELECT * FROM user_data WHERE userID = $i";
foreach ($pdo->query($sql) as $r);

$r = '
<div class="login_div" >
<h1 class="login_text">Login</h1>
<form action="mainUI.php" method="post">
<table class="login_table" border="1">
<tr>
<th style="width: 20%">Username:</th>
<th>
<input style="width: 95%" type="text" maxlength="99">
</th>
</tr>
<tr>
<th>Password:</th>
<th>
<input style="width: 95%" type="password" maxlength="99">
</th>
</tr>
</table>
</form></div>';


echo $r;
echo "</div>
</body>
</html>";
