<html>
<body>
<h2 align="center"><u>factorial of number using function</u></h2>
<form method="get">
<input type="number" placeholder="number" name="num">
<button type="submit" name="submit" value="submit">
check</button>
</form>
<?php
if(isset ($_GET['submit']))
{
$x = 1;
$n = $_GET['num'];
for($i=1; $i <= $n-1; $i++)
{
$x = $x * ($i+1);
}
echo "factorial of $n is $x";
}
?>
</body>
</html>