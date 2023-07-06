<?php


// Create connection
     $con=mysqli_connect("localhost","root","","rgukt",3305);
// Check connection
     // if($con)
     // {
     //      echo "connection";
     // }
     // else
     // {
     //      echo "not connected";
     // }
     //insertion
     $sql="SELECT `sno`, `sid`, `sname`, `spassword`, `semail`, `sphone` 
     FROM `students` WHERE sid='n180416'";
     $result=mysqli_query($con,$sql);
     if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
         echo $row['sid'],$row['sname']."<br>";
     }
    } 
     else{
      echo "not intrested";
     }
?>