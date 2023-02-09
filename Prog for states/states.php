<html>
<head>
<title>States</title>
</head>
<body>
<?php
	$ind=array('Maharashtra','West Bengal','Gujrat','Orissa','Rajasthan');

	$amer=array('Alaska','California','Nevada','Texas','New York');

	$shril=array('Amparai','Badulla','Batticaloa','Kandy','Matara');

	switch($_POST['country'])
	{
		case 1:
		for($i=0;$i<5;$i++)
		echo $ind[$i]."<br>";
		break;
		case 2:
		for($i=0;$i<5;$i++)
		echo $amer[$i]."<br>";
		break;
		case 3:
		for($i=0;$i<5;$i++)
		echo $shril[$i]."<br>";
		break;
}
?>
</body>
</html>