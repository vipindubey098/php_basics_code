<html>
<head>
<title>States</title>
</head>
<body>
	<form method="post" action="dict.php">
		Text: <input type="text" name="t1"><br>
		<input type="submit" value="Submit">
	</form>


<?php
$t1=$_POST['t1'];

$dict=array(
	"abandon"=>"Leave without intending to return.",
	"bitter"=>"Tasting sharp not sweet or mild.",
	"clown"=>"A person who makes comical tricks.",
	"draft"=>"A primarily written version.",
	"eat"=>"Chew and swallow(food).",
	"feast"=>"A large elaborate meal.",
	"gas"=>"An airlike substance.",
);
if(array_key_exists($t1, $dict))
{
	echo $t1." : ".$dict[$t1];
}
else
{
	echo "no match found!";
}
?>
</body>
</html>