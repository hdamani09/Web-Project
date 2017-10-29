<?php
session_start();
include_once 'dbh.inc.php';
$sessionid = $_SESSION['u_id'];

$filename = "../profile/cover".$sessionid.".*";
$fileinfo = glob($filename);
$fileExt= explode('.',$fileinfo[0]);
$fileActualExt= $fileExt[3];

$file = "../profile/cover".$sessionid.".".$fileActualExt;

if(!unlink($file)){
  echo "File not deleted";
} else {
  "File deleted";
}

$sql = "UPDATE coverimg SET status=1 WHERE user_id='$sessionid';";
mysqli_query($conn,$sql);
header("Location: ../index.php?deletepic=success");
