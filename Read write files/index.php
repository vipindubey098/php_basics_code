<html>
<head>
<title>Shouts</title>
</head>
<body>
<?php
if(isset($_POST['mgs']))
{
	$pmsg=$_POST['mgs'];
	if(isset($_POST['nme']))
	{
		$uname=$_POST['nme'];
	}
	else
	{
		$uname="Guest";
	}
$w_msg="\n".$uname."#".$pmsg;

// Open the file up in append mode.
$fh = fopen("shouts.txt", "at");
fwrite($fh, $w_msg);

// Close the handle
fclose($fh);
}
// Read the file into an array
$shouts = file("shouts.txt");
// Cycle through the array

echo "<h1>Shouts</h1><br>";

foreach ($shouts as $shout)
{
	// Parse the line, retrieving the name and msgs
	list($name, $msg) = explode("#", $shout);
	// Remove newline from $msg
	$msg = trim($msg);
	// Output the formatted name and msgs
	echo $name.": ".$msg."<br>";
}
?>
<form method="post" action="index.php">
Name: <input type="text" name="nme"><br>
Message: <input type="text" name="mgs"><br>
<input type="submit" value="Send">
</form>
</body>
</html>