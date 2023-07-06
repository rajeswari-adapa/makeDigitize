<?php
 include 'header.php';
 include 'navbar.php';
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <h1><center>Reset password</center></h1>
    
    <div class="fline">
            <div class="sline">
            </div>
        </div>
        <div style="margin-bottom:10px;">
    <form action="mdpassword.php" method="post" onsubmit="return fpvalidate();">
    <div class="m-3">
            <label for="id" class="form-label">Id</label>
            <input type="text" class="form-control" id="sid" name="uid" required>
      </div>  
     
        <div class="m-3">
            <label for="phnumber" class="form-label">Phone</label>
            <input type="text" class="form-control" id="sphone" name="uphone" required> 
        </div>
        <div class="m-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="spassword" name="upassword" required> 
    </div>
        <div class="m-3">
            <button type="submit" name="reset" class="btn btn-primary">Reset password</button>
        </div>
        
        Not Registered Yet?<a href="register.php">Click Here</a>
        login here<a href="login.php">click here</a>
        <?php
        include 'footer.php';
        ?>
        <script src="form_valid.js"></script>
        </div>
        
 </body>
 