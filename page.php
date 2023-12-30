<!doctype html>
<head>
<title>login page</title>
<body>
    <form action="page.php" method="POST">
        <label type= "username" name="username">username</label>
        <input type="text" name="ap"><br><br>
        <label type="password">password</label>
        <input type="text" name="ap"><br><br>
        <div class="container" style="background-color:#d3a383f7"></div><br>
        <button type="submit">submit</button>
        <button type="submit">Login</button><label><input type="checkbox" checked="checked" name="Remember"> Remember me </label>

        <br><hr><br>
    
</form>
</body>
</head>
<?php
$username=$_POST['ap'];
$password=$_POST['ap'];

echo"Welcome";
?>

