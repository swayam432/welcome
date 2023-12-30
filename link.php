<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body bgcolor="lightyellow">
      <form action="page.php" method="POST">
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="hg" VALUE="username" required><br><br>
      <label for="Password"><b>Password</b></label>
      <input type="Password" placeholder="Enter Password" name="hg" VALUE="Password" required><br><br>
      <div class="container" style="background-color:#d3a383f7"></div><br>
      <button type="submit">Login</button><label><input type="checkbox" checked="checked" name="Remember"> Remember me </label>
      <a href="#">Forgot</a> <a href="#">password?</a></span>
    <br><hr><br> 
    </div>
      </form>



<body>
</html>
<?php
$username=$_POST['hg'];
$password=$_POST['hg'];

?>

