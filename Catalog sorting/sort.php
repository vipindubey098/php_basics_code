<html>
<head>
<title>Sorted catalog</title>
</head>
<body>
<?php
$array_catalog=array(array($_POST['pa1'],$_POST['pa2'],$_POST['pa3']),
				array($_POST['pb1'],$_POST['pb2'],$_POST['pb3']),
				array($_POST['pc1'],$_POST['pc2'],$_POST['pc3']));

echo "Sorted list:<br>";

for($i=0;$i<3;$i++)
{
	sort($array_catalog[$i]);
	echo "<br>category ".($i+1)."<br>";
	for($j=0;$j<3;$j++)
	{
		echo $array_catalog[$i][$j]."<br>";
	}
}
?>
</body>
</html>