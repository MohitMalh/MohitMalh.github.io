<?php
session_start();
include "conn.php";

$arr=array('Booking', 'Tours Timing', 'Feedback','Museum Enquiry');
echo json_encode($arr);
?>