<?php
 include 'header.php';
 ?>
 
<body>
    <?php 
     include 'navbar.php';
     ?>
     <br>
        <h1><center>MakeDigitize Registration</center></h1>
        <div class="fline">
            <div class="sline">
            </div>
        </div>
        <div style="margin-bottom:10px;">
    <form action="mhome.php" method="post" onsubmit="return validate();">
    <div class="m-3">
            <label for="sid" class="form-label">Id</label>
            <input type="text" class="form-control" id="sid" name="uid" required>
      </div>  
     <div class="m-3">
            <label for="sname" class="form-label">Name</label>
            <input type="text" class="form-control" id="sname" name="uname" required>
    </div>
        <div class="m-3">
            <label for="spassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="spassword" name="upassword" required> 
        </div>
        <div class="m-3">
            <label for="semail" class="form-label">Email</label>
            <input type="email" class="form-control" name="uemail">
        </div>
        <div class="m-3">
            <label for="sphone" class="form-label">phno</label>
            <input type="text" class="form-control" id="sphone" placeholder="used for forgot password" name="uphno" required>
        </div>
        <div class="m-3">
            <button type="submit" name="login" class="btn btn-primary">submit</button>
        </div>
</div>

<?php 
include 'footer.php';
?>
<script src="form_valid.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
</body>