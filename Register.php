<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="page.php" method="POST">
        <label type="username" name="username">username:</label>
        <input type="text" placeholder="Enter Username" name="username" required><name="oc"><br><br>
        <label type="Email" name="Email" placeholder="Enter Email" name="Email" required>>Email:</label>
        <input type="text" name="oc"><br><br>
        <label type="Contact" name="Contact">Contact:</label>
        <input type="Number" name="oc" Value="Number"><br><br>
        <label type="Password" name= "Password" placeholder="Enter Password" name="Password" required>>Password:</label>
        <div class="container" style="background-color:#d3a383f7"></div>
        <input type="text" name="oc"><br><br>
        <button type="submit">Login</button><label><input type="checkbox" checked="checked" name="Remember"> Remember me </label>
    <br><hr><br>  
    </form>
    </form>
    <form action="page.php" method="post">
    <p style="color:blue"><label>Does not a account:</lable>
    <input type="submit" name="em" value="login"></p>
</body>
</html>
<?php
$username=$_POST['oc'];
$Email=$_POST['oc'];
$Contact=$_POST['oc'];
$Password=$_POST['oc'];
$submit=$_POST['em'];

echo"Register sucessfully";

?>



