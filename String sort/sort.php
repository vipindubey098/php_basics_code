<html>
<head>
<title>Sorted string array</title>
</head>
<body>
<?php
$str_array[0]=$_POST['t1'];
$str_array[1]=$_POST['t2'];
$str_array[2]=$_POST['t3'];
$str_array[3]=$_POST['t4'];
$str_array[4]=$_POST['t5'];
$str_array[5]=$_POST['t6'];

sort($str_array);

echo "Sorted list:<br>";

for($i=0;$i<6;$i++)
{
	echo "<br>".$str_array[$i];
}
?>
</body>
</html>