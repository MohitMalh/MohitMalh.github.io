<?php
session_start();
include "conn.php";

$eml=$_POST["eml"];
$paswd =$_POST["paswd"];
$query="SELECT * FROM User_details WHERE User_details.email_id = :eml and aes_decrypt(password,'key') = :paswd";


	$stmt=$dbh->prepare($query);
	$stmt->bindValue(':eml',$eml);
	$stmt->bindValue(':paswd',$paswd);
	$result=$stmt->execute();
	$result=$stmt->fetchAll();
	$user_exist =$stmt->rowCount($result);
	if($user_exist>0)
	{
		echo "exist";
		$_SESSION['email']=$eml;
		
		$_Session['fname']=$firstname;
		$stmt->closeCursor();
		//return $result;
	}
	else
	{
		echo "available";
	}
?>