<?php
session_start();
include "conn.php";
if(isset($_POST['pasd']))
{
	$pasd=$_POST["pasd"];
	$_SESSION['pasd']=$pasd;
	
}
?>
