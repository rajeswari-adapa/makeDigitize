<?php
 include 'db.php';
 include 'header.php';
 include 'navbar.php';
if(isset($_POST['reset']))
 {
     $id=$_POST['uid'];
   $phone=$_POST['uphone'];
     $npassword=$_POST['upassword'];
     $sql="SELECT `sid`, `sphone` FROM `students` WHERE `sid`='$id'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
   {
        $row=mysqli_fetch_assoc($result);
          $dsid=$row['sid'];
          $dphone=$row['sphone'];
          if($id==$dsid && $phone==$dphone)
          {
              $sql="UPDATE `students` SET `spassword`='$npassword' WHERE `sid`='$dsid'";
              $r= mysqli_query($con,$sql);
              if($r){
                  echo "<div style='margin-top:100px;min-height:450px;'>password changed successfully<br>
                  To login
                  <a href='login.php'> click here</a>
                  </div>";
                  include 'mf.php';
                }
              else{
                  echo "<div style='margin-top:100px;min-height:450px;'>sorry something went wrong</div>";}
          }
      else{
          echo "<div style='margin-top:100px;min-height:450px;'>enter valid sid and phone number</div>";}
  }
      else{
          echo "<div style='margin-top:100px;min-height:450px;'>enter valid details</div>";}
 }
 else{
     header('Location:login.php');}
 ?>
 <body>
 <link rel="stylesheet" type="text/css" href="style.css">
</body>