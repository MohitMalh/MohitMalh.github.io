<?php
session_start();
include "conn.php";

$eml=$_POST["eml"];
$query= "SELECT email_id FROM User_details WHERE User_details.email_id = :email_id";


	$stmt=$dbh->prepare($query);
	$stmt->bindValue(':email_id',$eml);
	$result=$stmt->execute();
	$result=$stmt->fetchAll();
	$user_exist =$stmt->rowCount($result);
	if($user_exist>0)
	{
		echo "exist";
	}
	else
	{
		echo "available";
		$_SESSION['eml']=$eml;
		$stmt->closeCursor();
		return $result;
	}
?>