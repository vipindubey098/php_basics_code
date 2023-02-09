<html>
<head>
<title>Web counter</title>
</head>
<body>
<form method="post" action="index.php">
<?php
if(isset($_POST['count']))
{
	if($_POST['count']>=0)
	{
		echo "Count: ".($_POST['count']+1)."<br>";
		echo "<input type='hidden' name='count' value='".($_POST['count']+1)."'>";
	}
}
else
{
	echo "Count: 0<br>";
	echo "<input type='hidden' name='count' value='0'>";
}
?>
<input type="submit" value="Count">
</form>
<form method="post" action="res.php">
<input type="submit" value="Reset">
</form>
</body>
</html>
