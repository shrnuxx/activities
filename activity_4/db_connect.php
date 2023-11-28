<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "activity5";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>