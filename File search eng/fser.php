<html>
<head>
<title>Dictionary</title>
</head>
<body>
<?php
$t1=$_POST['t1'];

// Read the file into an array
$searches = file("res.txt");

echo "<h1>Search Results</h1><br>";

$itr = 0;

foreach ($searches as $search)
{
	if(stristr($search, $t1)) 
   { 
        echo "<br><a href='".$search."'>".$search."</a><br>";
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