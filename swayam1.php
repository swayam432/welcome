<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop</title>
</head>
<body bgcolor="lightblue">
    <form action="swayam1.php" method="GET">
        <label>number</label>
        <input type="number" name="number">
        <br>
        <br>
        <input type="submit" name="ac" value="submit"></input>
        <br><hr><br>
        <u>Result:</input>
        <br>

</form>
<?php
$n=$_GET['number'];
$sum=0;
while($n!=0)
{
    $r=$n%10;
    $sum=$sum+$r;
    $n=$n/10;
}
echo"$sum"
?>
</body>
</html>