<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "sisproject";

$conn = new mysqli("localhost", "root", "", "sisproject","3307");

if(!$conn) {
    die("Database Connection Failed");
}
?>