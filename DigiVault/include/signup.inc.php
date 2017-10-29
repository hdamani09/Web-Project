<?php
if(isset($_POST['submit-signup'])){
  include_once 'dbh.inc.php';

  $first= mysqli_real_escape_string($conn,$_POST['first']);
  $last= mysqli_real_escape_string($conn,$_POST['last']);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $uid= mysqli_real_escape_string($conn,$_POST['uid']);
  $pwd= mysqli_real_escape_string($conn,$_POST['pwd']);
  $pwd2= mysqli_real_escape_string($conn,$_POST['pwd2']);

    if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
      header("Location: ../index.php?signup=invalidname");
      exit();
    } else{
      $sql="SELECT * FROM users WHERE user_email='$email'";
      $result= mysqli_query($conn,$sql);
      $resultcheck = mysqli_num_rows($result);

      if($resultcheck>0){
        header("Location: ../index.php?signup=emailtaken");
        exit();
      }else{
        $sql="SELECT * FROM users WHERE user_uid='$uid'";
        $result= mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);

        if($resultcheck>0){
          header("Location: ../index.php?signup=usertaken");
          exit();
        } else {
          if($pwd!=$pwd2){
            header("Location: ../index.php?signup=passwordmismatch");
            exit();
          }else{
            $hashedPwd=  password_hash($pwd,PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd');";
            mysqli_query($conn,$sql);

            $sql = "SELECT * FROM users WHERE user_uid='$uid' AND user_first='$first';";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result)){
                $userid = $row['user_id'];
                $sql1 = "INSERT INTO profileimg (user_id,status) VALUES ('$userid',1)";
                mysqli_query($conn,$sql1);
                $sql2 = "INSERT INTO coverimg (user_id,status) VALUES ('$userid',1)";
                mysqli_query($conn,$sql2);
              }
            }
            header("Location: ../index.php?signup=success");
            exit();
          }
        }
      }
    }
} else{
  header("Location: ../index.php?signup=error");
  exit();
}
