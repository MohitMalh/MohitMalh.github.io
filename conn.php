<?php
$servername = "127.0.0.1";
$dbname="boston_travel";
$username = "root";
$password = "yourpasswordhere";
global $dbh;
try
{
$dbh = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}
catch (PDOException $pe)
{
die("could not connect to the database $dbname:" . $pe->getMessage());
}
?>