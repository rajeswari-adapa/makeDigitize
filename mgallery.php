<?php
include 'header.php';
session_start();
if(isset($_SESSION['cname'])){
$files=scandir("C:/xampp/htdocs/practice/cse1/img/");
$files=array_diff($files,array(".",".."));
$images=array();
foreach($files as $image){
    array_push($images,$image);
}
//   $images=array("nuz.jpg","nuz1.jpg","nuz2.jpg","ac.jpg");
  echo "<h2 style='margin-bottom:1px;'><center style='color:orange;'>Gallery of images</center></h2>";
  echo"
  <div class='fline'>
  <div class='sline'>
  </div>
  </div><div class='container-fluid mt-4'>";
 foreach($images as $image){
    echo '<div style="display:inline-block;margin-left:10px;
    text-align:center;">';
    echo '<img src="/practice/cse1/img/'.$image.'"width="350px" height="200px">'; 
    echo '<p><a href="mdownload.php?file='.$image.'">Download</a></p>';
    echo '</div>';
 }
 echo "</div>";
}
 else{
  header('Location:mindex.php');
 }
?>