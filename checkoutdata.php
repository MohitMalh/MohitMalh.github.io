<?php 
session_start();
$servername = "127.0.0.1";
$dbname="boston_travel";
$username="root";
$password="yourpasswordhere";
$email= $_POST["eml"];
$firstname =$_POST["fname"];
$tourname =$_POST["tname"];
$people = $_POST["num"];
$total= $_POST["total"];
$dbh = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$q="INSERT INTO checkout(email_id,firstname,tourname,people,total) Values(:eml, :fname, :tname, :num, :total)";
$query =$dbh->prepare($q);
$query->bindParam(':eml', $email);
$query->bindParam(':fname', $firstname);
$query->bindParam(':tname', $tourname);
$query->bindParam(':num', $people);
$query->bindParam(':total', $total);
$result=$query->execute();
echo "data inserted";
?>
