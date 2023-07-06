<?php
$name=$_GET['file'];
header("content-disposition:attachment;filename=".basename($name).";");
readfile("practice/cse1/$name");
?> 
