<html>
<head>
<title>News</title>
</head>
<body>
<?php
// Read the file into an array
$adds = file("adds.txt");

//read one line
$banner=$adds[0+rand(1,3)];

echo "<h2>".$banner."</h2>";

// Read the file into an array
$news = file("news.txt");

// Cycle through the array
foreach ($news as $new)
{
	// Parse the line, retrieving the name and msgs
	list($hdline, $story) = explode("#", $new);
	// Remove newline from $msg
	$story = trim($story);
	// Output the formatted name and msgs
	echo "<h1>".$hdline."</h1><br> <p style='width:400px;'>".$story."</p><br>";
}
?>
</body>
</html>