<?php
include 'db.php';
 include 'header.php';
 include 'navbar.php';
 if(isset($_POST['update'])){
    //updation
    $sid=$_POST['sid'];
    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $sphone=$_POST['sphone'];
    $upsql="UPDATE `students` SET `sname`='$sname',`semail`='$semail',`sphone`='$sphone' WHERE `sid`='$sid'";
    if(mysqli_query($con,$upsql)){
       header('Location:mfpage.php');
    }
 }
 $sid=$_GET['s'];
 $sql="SELECT `sid`,`sname`, `semail`,`sphone` FROM `students` WHERE `sid`='$sid'";     
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
  $row=mysqli_fetch_assoc($result);
}
 ?>
<body>
     <br>
        <h1><center>MakeDigitize Update of student data</center></h1>
        <div class="fline">
            <div class="sline">
            </div>
        </div>
        
        <div style="margin-bottom:10px;">
    <form action="" method="post" onsubmit="return validate();">
    <div class="m-3">
            <label for="sid" class="form-label">Id</label>
            <input type="text" class="form-control" id="sid" name="sid"
            value="<?php echo $row['sid'];?>" readonly>
      </div>  
     <div class="m-3">
            <label for="sname" class="form-label">Name</label>
            <input type="text" class="form-control" id="sname" name="sname"
            value="<?php echo $row['sname'];?>" required>
    </div>
       
        <div class="m-3">
            <label for="semail" class="form-label">Email</label>
            <input type="email" class="form-control" id="semail" name="semail"  value="<?php echo $row['semail'];?>">
        </div>
        <div class="m-3">
            <label for="sphone" class="form-label">phno</label>
            <input type="text" class="form-control" id="sphone"  value="<?php echo $row['sphone'];?>"placeholder="used for forgot password" name="sphone" required>
        </div>
        <div class="m-3">
            <button type="submit" name="update"  class="btn btn-primary">update</button>
        </div>
</div>

<?php 
include 'footer.php';
?>
<script src="form_valid.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
</body>
