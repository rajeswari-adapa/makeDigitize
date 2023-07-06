<?php
include 'header.php';
include 'navbar.php';
$weather_con="";
$weather_temp="";
$error="";
if (array_key_exists("submit",$_GET)){
  if(!$_GET['search']){
      $error="We are Sorry please search something!!!";
  }
  else if($_GET['search']){
   $api_data=file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_GET['search']."&APPID=33f4999fb8a99f96f18979dabb204a2a");
    $weather_array=json_decode($api_data,true);
    $temp=$weather_array["main"]['temp'];
    $weather_temp="<b>Temprature:</b> ".($temp-273)."&#8451<br>";
    $weather_con=$weather_temp." "."<b>Weather condition:</b> ".$weather_array["weather"]['0']["description"];
  }
  }
  ?>
  <!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<div style="margin-top:10%;margin-right:2%;position:fixed;top:3%;right:2%;">
<div style="background-color:rgba(204,240,239,0.6);min-width:250px;min-height:50px; border-radius:10px;padding:10px 20px">
 Weather Information
 <div class="input-group d-flex justify-content-center"style="align-items:center">
 <div>
    <form action="" method="GET" >
    <input type="text" id="search" name="search" placeholder="Search Weather" id="form1" class="form-control">
</div>
    <button type="submit"  name="submit" >
    </form>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button> 
</div>
</div>
</div>
<div style="margin:200px 200px">
    <a href="/raje_Oauth/index.php" class="btn btn-primary">Google SignIn</a>OR
    <a href="login.php" class="btn btn-primary">SignIn</a>OR
    <a href="register.php" class="btn btn-primary">Register</a>
</div>
<br>
<div  class="d-flex justify-content-center" id="message">
<?php
if($weather_con){
  echo '<div class="alert alert-success" role="alert" style="background-color:rgba(204,240,239,0.6);min-width:260px;
  min-height:50px; border-radius:10px;
  padding:10px 20px;margin-top:17%;margin-right:2%;position:fixed;top:3%;right:2%;">
 '.$weather_con.'
</div>';
}
if($error){
  echo '<div class="alert alert-danger" role="alert" style="background-color:rgba(204,240,239,0.6);min-width:250px;
  min-height:50px; border-radius:10px;border:3px solid rgba(0,0,0,0.3);
  padding:10px 20px;margin-top:15%;margin-right:2%;position:fixed;top:6%;right:2%;">
</div>';
}
?>
<script type="text/javascript">
  var image=document.getElementById('im');
  image.src="https://openweathermap.org/img/wn/"+weather[0].icon+"@2x.png";
</script>