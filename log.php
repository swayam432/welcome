<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
  <form action="log.php" method="POST" required="authentication">
    <label type=<include>username</label></required>
    <input type="text"  name="fd"><br><br>
    <label type=<include>password</label></required>
    <input type="number" name="fd"><br><br>
    <button type="submit">submit</button><br><br>
<br><hr><br>
</form>
  </body>
</html>
<?php
$username=$_POST['fd'];
$password=$_POST['fd'];

echo"login sucessfull"
?>
