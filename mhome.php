<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'db.php';
include 'header.php';
 include 'navbar.php';   
if(isset($_POST['login'])){
    $sid=$_POST['uid'];
    $sname=$_POST['uname'];
    $spassword=$_POST['upassword'];
    $semail=$_POST['uemail'];
    $sphone=$_POST['uphno']; 
    //echo $sid,$sname,$spassword,$semil,$sphone;
    $csql="SELECT * FROM `students` WHERE `sid`='$sid'";
    $gr=mysqli_query($con,$csql); 
    if(mysqli_num_rows($gr)>0) {
        echo "<div style='margin-top:100px;min-height:450px'>you are already registered user.
        Please go ahead and login by <a href='login.php'>Click Here</a></div>";
        exit();
    }
    $sql="INSERT INTO `students`(`sid`,`sname`,`spassword`,`semail`,`sphone`) 
    VALUES ('$sid','$sname','$spassword','$semail','$sphone')";
    $r=mysqli_query($con,$sql);
    if($r){
       $psql="INSERT INTO `spermission`( `sid`, `stype`, `slogin`) VALUES ('$sid','student','0')";
       $p=mysqli_query($con,$psql);
       if($p){
        echo "<div style='margin-top:100px;min-height:450px'>subdata success</div>";
       }
       else{
        echo "<div style='margin-top:100px;min-height:450px'>subdata not success</div>";
       }
    }
     echo "<div style='margin-top:100px;min-height:450px'>register successfully</div>";
     include 'footer.php';
    }
else{
    header('Location:register.php');
}
?>
<body>
 
</body>