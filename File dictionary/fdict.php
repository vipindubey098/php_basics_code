<html>
<head>
<title>Dictionary</title>
</head>
<body>
<?php
$t1=$_POST['t1'];

// Read the file into an array
$dicts = file("dict.txt");

echo "<h1>Dictionary</h1><br>";

$itr = 0;

foreach ($dicts as $dict)
{
	// Parse the line, retrieving the name and msgs
	list($word, $mean) = explode("#", $dict);
	// Remove newline from $msg
	$mean = trim($mean);
	if($word==$t1)
	{
		// Output the formatted name and msgs
		echo $word.": ".$mean."<br>";
		$itr++;
	}
}

if($itr==0)
{
	echo "no match found!";
}
?>
</body>
</html>