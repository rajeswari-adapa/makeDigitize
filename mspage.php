<?php

session_start();
include 'header.php';
include 'navbar.php';
 echo "<div style='margin-top:5%;
 margin-left:80%;'>welcome Mr/Mrs. &nbsp;&nbsp;
            <font color='blue'>".strtoupper($_SESSION['cid'])."</font></div>";
            include 'mgallery.php';    
            echo "<a class='btn btn-success'  style='margin-left:80%;margin-bottom:5px'href='mlogout.php'>
            Logout</a>";;
            include 'footer.php';
            ?>
