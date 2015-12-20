<?php 
session_start();
$servername = "127.0.0.1";
$dbname="boston_travel";
$username="root";
$password="yourpasswordhere";
$email= $_POST["eml"];
$firstname =$_POST["fname"];
$lastname =$_POST["lname"];
$satisfy = $_POST["satisfy"];
$comment= $_POST["comment"];
$dbh = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$q="INSERT INTO feedback(email_id,firstname,lastname,satisfy,comment) Values(:eml, :satisfy, :fname, :lname, :comment)";
$query =$dbh->prepare($q);
$query->bindParam(':eml', $email);
$query->bindParam(':satisfy', $satisfy);
$query->bindParam(':fname', $firstname);
$query->bindParam(':lname', $lastname);
$query->bindParam(':comment', $comment);
$result=$query->execute();
echo "data inserted";
?>
