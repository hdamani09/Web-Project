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

  $file= $_FILES['file'];
  $fileName= $file['name'];
  $fileTmpName= $file['tmp_name'];
  $fileSize= $file['size'];
  $fileError= $file['error'];
  $fileType= $file['type'];

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png','gif');

  if(in_array($fileActualExt,$allowed)){
    if($fileError=== 0){
      if($fileSize<9999999){
        $fileNameNew = "cover".$sessionid.".".$fileActualExt;
        $fileDestination = '../profile/'.$fileNameNew;
        move_uploaded_file($fileTmpName,$fileDestination);
        $sql = "UPDATE coverimg SET status=0 WHERE user_id='$sessionid'";
        mysqli_query($conn,$sql);
        header("Location: ../index.php?upload=success");
      } else {
        echo "<script>alert('File should be less than 900KB!')</script>";
        header("Location: ../index.php?upload=size");
      }
    } else {
      echo "<script>alert('Error uploading the file!')</script>";
      header("Location: ../index.php?upload=error");
    }
  } else{
    echo "<script>alert('Filetype not supported!')</script>";
    header("Location: ../index.php?upload=typeerror");
  }
