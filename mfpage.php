<?php
//table and check for faculty
include 'db.php';
session_start();
include 'header.php';
include 'navbar.php';
 echo "<div style='margin-top:5%;
 margin-left:80%;'>welcome Mr/Mrs. &nbsp;&nbsp;
<font color='blue'>".strtoupper($_SESSION['cid'])."</font></div>";
// echo "faculty page";
// echo "here all students will be displayed with update option";   
$sql="SELECT `sid`,`sname`, `semail`,`sphone` FROM `students`";     
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    ?>
    <div class="container">
        <br>
        <h4><u>Details of Users:</u></h4>
    <table class="table table-bordered table-hover table-responsive table-light">
        <thead>
            <tr><th>SNO</th>
            <th>SID</th>
            <th>SNAME</th>
            <th>SEMAIL</th>
            <th>SPHONE</th>
            <th>Update</th>
</tr>
</thead>
<tbody>
    <?php
    $i=0;
   while($row=mysqli_fetch_assoc($result))
   {$i++;
    ?>
    <tr><td><?php echo $i;?> </td>
        <td><?php echo $row['sid'];?> </td>
        <td><?php echo $row['sname'];?></td>
        <td><?php echo $row['semail'];?></td>
        <td><?php echo $row['sphone'];?></td>
    <td><a class='btn btn-primary' href="mrupdate.php?s=<?php echo $row['sid']; ?>"> Update</a></td></tr>
<?php
    }?>
    </tbody>
    </table>
</div><?php
    }
else{
    echo "no data exist";
}
include 'mgallery.php';   
echo "<a class='btn btn-success'  style='margin-left:80%;margin-bottom:5px'href='mlogout.php'>
Logout</a>";
include 'footer.php';
?>
