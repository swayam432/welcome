<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body bgcolor="lightblue">
    <h1>login page</h1>
    <form action="swayam.php" method="POST">
    <label>username</label>
    <input type="text" name="username">
    <br>
    <br>
    <label>password</label> 
    <input type="password" name="password">
    <br>
    <br>
    <button type="submit">submit</button>
    <span class="password">Forgot <a href="#">password?</a></span>
    <br>
    <br>
    <button type="sign in">sign in</button><button type="login">login</button>
<br><hr><br>    
</form>    

<?php
$username=$_POST['username'];
$password=$_POST['password'];
echo"LOGIN SUCESSFULLY";

?>


</body>
</html>
