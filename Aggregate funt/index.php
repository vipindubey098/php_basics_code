<html>
<head>
<title>Aggregate funtions MySQL</title>
</head>
<body>
<?php
$hostname = 'localhost';        // MySQL hostname.
$dbname   = 'MCA';         	// Database name.
$username = 'root';             // Database username.
$password = 'life';             // Database password.

// Let's connect to host
$con=mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

// Select the database
mysql_select_db($dbname, $con) or DIE('Database name is not available!');

//Query
$result = mysql_query("SELECT * FROM agg;");

echo "All Numbers<br>";

//display all numbers
while($res = mysql_fetch_array($result))
{
	echo $res["numb"]."<br>";
}

//Aggregate Query
$result = mysql_query("SELECT avg(numb), max(numb), min(numb), sum(numb), count(numb), count(distinct numb) FROM agg;");

//display all numbers
while($res = mysql_fetch_array($result))
{
	echo "Average: ".$res["avg(numb)"]."<br>";
	echo "Maximum: ".$res["max(numb)"]."<br>";
	echo "Minimum: ".$res["min(numb)"]."<br>";
	echo "Sum: ".$res["sum(numb)"]."<br>";
	echo "Count: ".$res["count(numb)"]."<br>";
	echo "Count Distinct: ".$res["count(distinct numb)"]."<br>";
}
?>
</body>
</html>