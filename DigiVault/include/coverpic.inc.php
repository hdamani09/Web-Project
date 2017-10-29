<?php
    include_once 'dbh.inc.php';
    $sessionid= $_SESSION['u_id'];
    $sql = "SELECT * FROM users WHERE user_id='$sessionid';";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        $id = $row['user_id'];
        $sqlImg = "SELECT * FROM coverimg WHERE user_id='$id';";
        $resultImg = mysqli_query($conn,$sqlImg);
        while($rowImg = mysqli_fetch_assoc($resultImg)){
          if($rowImg['status']==0){
            $filename= "profile/cover".$_SESSION['u_id']."*";
            $fileinfo = glob($filename);
            $fileExt= explode('.',$fileinfo[0]);
            $fileActualExt= $fileExt[1];
            echo "<img src='profile/cover".$id.'.'.$fileActualExt."'>";
          }else{
            echo "<img src='profile/coverdefault.jpg'>";
          }
        }
      }
    }
 ?>
