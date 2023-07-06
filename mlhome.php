<?php
include 'db.php';
include 'header.php';
include 'navbar.php';
//if(isset($_POST['login']))
session_start(); 
if(isset($_POST['login']) || isset($_SESSION['cid'])){
    
    $sid=isset($_POST['uid'])?$_POST['uid']:$_SESSION['cid'];
    $spassword=isset($_POST['upassword'])?$_POST['upassword']:$_SESSION['cpassword'];
    $c=isset($_POST['c'])?$_POST['c']:"";
    $sql="SELECT `sid`, `spassword` FROM `students` WHERE `sid`='$sid'";

    $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $dsid=$row['sid'];
        $dspswd=$row['spassword'];
        if($sid==$dsid && $spassword==$dspswd){
            $psql="SELECT`stype`,`slogin` FROM `spermission` WHERE `sid`='$sid'";
            $sresult=mysqli_query($con,$psql);
            $srow=mysqli_fetch_assoc($sresult);
            if(isset($_POST['login'])){
            if($srow['slogin']==1){
                header('Location:salreadylogin.php');
            }
            else{
               $usql="UPDATE `spermission` SET `slogin`='1' WHERE `sid`='$sid'";
               if($c=="on"){
                setcookie("uid",$sid,time()+3600);
                setcookie("upassword",$spassword,time()+3600);
               }
               //session_start();
               $_SESSION['cid']=$sid;
               $_SESSION['cpassword']=$spassword;
               $_SESSION['stype']=$row['stype'];
               if($srow['stype']=="student"){
                header('Location:mspage.php');
               }
               elseif($srow['stype']=="faculty"){
                    header('Location:mfpage.php');
               }
               elseif($srow['stype']=="admin"){
                header('Location:mapage.php');
               }
               else{
                echo "different role exist";
               }

               mysqli_query($con,$usql);
            }
        }
            echo "<div style='margin-top:4%;min-height:350px;margin-left:80%;'>welcome Mr/Mrs. &nbsp;&nbsp;
            <font color='blue'>".strtoupper($sid)."</font></div>";
            
            echo "<a class='btn btn-success'  style='margin-left:80%;margin-bottom:5px'href='mlogout.php'>
            Logout</a>";;
            include 'footer.php';
        }
        else{
            echo "login failed"."<br>";
            echo "<div style='margin-top:100px;min-heigth:450px'>please enter correct username or password 
            <a href='login.php'>Try Again</a></div>";
        }
       
     }
     else{
        echo "<div style='margin-top:100px;min-heigth:450px'>invalid student id</div>";
     }
    }
     else{
             header('Location:login.php');
       }


?>
<body>
 <link rel="stylesheet" type="text/css" href="style.css">
</body>