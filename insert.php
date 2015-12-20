<?php 
session_start();
$servername ="127.0.0.1";
$dbname="boston_travel";
$username="root";
$password="yourpasswordhere";
$email= $_SESSION["eml"];
$pasd= $_SESSION["pasd"];
$firstname =$_POST["fname"];
$lastname =$_POST["lname"];
$phone = $_POST["phone"];
$dbh = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $q="INSERT INTO User_details(email_id,password,firstname,lastname,phone) Values(:eml,aes_encrypt(:pasd,'key'),:fname, :lname, :phone)";
  $query =$dbh->prepare($q);
  $query->bindParam(':eml', $email);
  $query->bindParam(':pasd', $pasd);
  $query->bindParam(':fname', $firstname);
  $query->bindParam(':lname', $lastname);
  $query->bindParam(':phone', $phone);
  $result=$query->execute();
  echo "data inserted";
  $_SESSION['email']=$email;
  ?>
  