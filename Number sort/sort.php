<html>
<head>
<title>Sorted numeric array</title>
</head>
<body>
<?php
$num_array[0]=$_POST['t1'];
$num_array[1]=$_POST['t2'];
$num_array[2]=$_POST['t3'];
$num_array[3]=$_POST['t4'];
$num_array[4]=$_POST['t5'];
$num_array[5]=$_POST['t6'];


for($i=4;$i>=0;$i--)
{
	for($j=0;$j<=$i;$j++)
	{
		if($num_array[$j]>$num_array[$j+1])
		{
			$temp=$num_array[$j];
			$num_array[$j]=$num_array[$j+1];
			$num_array[$j+1]=$temp;
		}
	}
}

echo "Sorted list:<br>";

for($k=0;$k<6;$k++)
{
	echo "<br>".$num_array[$k];
}
?>
</body>
</html>