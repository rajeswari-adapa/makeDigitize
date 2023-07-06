<?php
 include 'header.php';
 include 'navbar.php';
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">
<body>

    <h1><center>Login</center></h1>
    <div class="fline">
            <div class="sline">
            </div>
        </div>
        <div style="margin-bottom:10px;">
    <form action="mlhome.php" method="post" onsubmit="return lgvalidate();">
    <div class="m-3">
            <label for="sid" class="form-label">Id</label>
            <input type="text" class="form-control" id="sid" name="uid" required value="<?php 
            if(isset($_COOKIE['uid']))
            {
              echo $_COOKIE['uid'];
            }?>">
      </div>  
    <div class="m-3">
            <label for="spassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="spassword" name="upassword" required value="<?php
             if(isset($_COOKIE['upassword'])){
             echo $_COOKIE['upassword'];
        }?>"> 
        </div> 
    <div class="m-3 form-check">
        <input type="checkbox" class="form-check-input" name="c">
        <label class="form-check-label" for="remember me">Remember me</label>
    <div class="m-3">
        <button type="submit" name="login" class="btn btn-primary">submit</button>
        </div>
        </form>
        Not Registered Yet?<a href="register.php">Click Here</a><br>
        Have You Forgog password?<a href="mforgot.php">click here</a>
       
        <div>
    </div>
        <script src="form_valid.js"></script>
</body>
<?php
        include 'footer.php';
        ?>

