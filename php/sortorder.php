<html>
<body>
<?php
$age=array("peter"=>"35","ben"=>"37","joe"=>"43");
arsort($age);
foreach($age as $x => $x_value)
{
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}

krsort($age);
foreach($age as $y => $y_value)
{
echo "Key=" . $y . ", Value=" . $y_value;
echo "<br>";
}
?>
</body>
</html>
