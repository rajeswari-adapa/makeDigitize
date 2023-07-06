<?php
 include 'db.php';
 

session_start();
include 'header.php';
include 'navbar.php';
 echo "<div style='margin-top:5%;
 margin-left:80%;'>welcome Mr/Mrs. &nbsp;&nbsp;
<font color='blue'>".strtoupper($_SESSION['cid'])."</font></div>";
          

if(isset($_POST['sub'])){
    //location,destination
    $location=$_FILES['fn']['tmp_name'];
  
    $name=$_FILES['fn']['name'];
    $destination="img/".$name;
    $files=scandir("img");
    $files=array_diff($files,array(".",".."));
    foreach($files as $file){
        if($file==$name){
            echo "image already there with the same name upload different image,";
            exit();
        }
    }
    move_uploaded_file($location,$destination);
}
if(isset($_POST['sdelete'])){
    //echo "clicked on delete user button";
   $sid=$_POST['sid'];
   //echo $sid;
   $sql="SELECT * FROM `students` WHERE `sid`='$sid'";
   $result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0){
    $dsql="DELETE  FROM `students` WHERE `sid`='$sid'";
    $psql="DELETE  FROM `spermission` WHERE `sid`='$sid'";
    mysqli_query($con,$dsql);
    mysqli_query($con,$psql);
    echo "deleted successfully";
   }
   else{
    echo "student doesnot exist to delete";
   }
}
if(isset($_POST['aupdate'])){
   // echo "clicked on update";
   $sid=$_POST['sid'];
   $stype=$_POST['role'];
   $sql="SELECT * FROM `spermission` WHERE `sid`='$sid'";
   $result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0){
    //echo "user exist to update";
    $usql="UPDATE  `spermission` SET `stype`='$stype'  WHERE `sid`='$sid'";
    mysqli_query($con,$usql);
    echo "updated role successfully";
   }
   else{
    echo "user not exist to update";
   }
}
?>
     <div style="display:flex;justify-content:space-around; margin-top:1px;" > 
    <div class="aupload" style="width:300px;border:1px solid rgba(0,0,0,0.3);
    border-radius:10px;margin-bottom:10px;background-color:rgba(204,240,239,0.6);height:150px;">
    <p style="text-align:center;margin-bottom:1px;color:orange;font-weight:bold;">Upload Image</p>
<form action="" method="post" enctype="multipart/form-data">
    Upload:<input type="file" name="fn" accept="image/*">
    <input style="margin-top:4px;"type="submit" name="sub">
    
</form>
</div>


    <div class="adelete" style="width:300px;border:1px solid rgba(0,0,0,0.3);
    border-radius:10px;margin-bottom:10px;background-color:rgba(204,240,239,0.6);height:150px;">
    <p style="text-align:center;margin-bottom:1px;color:orange;font-weight:bold;">Delete Student</p>
    <form action="" method="post"> 
    sid:<input type="text" placeholder="Enter student Id:" name="sid"><br>
    <input style="margin-top:5px;" type="submit"  value="Delete" name="sdelete">
</form>
</div>

    <div class="aupdate" style="width:300px;border:1px solid rgba(0,0,0,0.3);
    border-radius:10px;margin-bottom:10px;background-color:rgba(204,240,239,0.6);height:150px;">
    <p style="text-align:center;margin-bottom:1px;
    color:orange;font-weight:bold;">Upload Role</p>
   <form action="" method="post">
    Sid:<input type="text" name="sid" palceholder="Enter Student Id" name="sid"><br>
    select Role:<select style="margin-top:5px;"style="margin-top:1px;" name="role">
        <option value="faculty">faculty</option>
        <option value="admin">Admin</option>
        </select>
        <br>
       <input style="margin-top:5px;" type="submit" value="Update Role" name="aupdate">
</form>
</div>
</div>

<?php
include 'mgallery.php';   
echo "<a class='btn btn-success'  style='margin-left:80%;margin-bottom:5px'href='mlogout.php'>
Logout</a>";
include 'footer.php';
?>
