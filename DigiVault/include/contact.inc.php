<?php
session_start();
include_once 'dbh.inc.php';
$session_email = $_SESSION['u_email'];
if(isset($_POST['submit-contact'])){
 $to = 'hdamani09@gmail.com';
 $subject = $_POST['subject'];
 $body = $_POST['message'];
 $headers = "From: $session_email";
 if(mail($to,$subject,$body,$headers)){
   header("Location: ../index.php?email=success");
 }
 else {
   header("Location: ../index.php?email=fail");
 }
 }
 ?>
