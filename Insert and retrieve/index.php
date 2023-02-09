<html>
<head>
<title>Insert and retrieve</title>
</head>
<body>
<?php
if(isset($_POST['sr']))
{
$sr=$_POST['sr'];
$fname=$_POST['fn'];
$mname=$_POST['mn'];
$lname=$_POST['ln'];
}

$hostname = 'localhost';        // MySQL hostname.
$dbname   = 'MCA';         	// Database name.
$username = 'personlife';             // Database username.
$password = 'life';             // Database password.

// Let's connect to host
$con=mysql_connect($hostname, $username, $password) or DIE('Connection to host is failed, perhaps the service is down!');

// Select the database
mysql_select_db($dbname, $con) or DIE('Database name is not available!');

echo "Personal info form<br>";

echo '<form method="post" action="index.php">';
//Query
if(isset($sr)&&($fname!=""||$mname!=""||$lname!=""))
{
	$result = mysql_query("SELECT * FROM person where srno=".$sr.";");
	//display the fields
	if(mysql_num_rows($result)>0)
	{
		//Sql query
		
		$sqlquery="UPDATE person set fname='" . $fname . "', mname='" . $mname . "', lname='" . $lname . "' where srno=" . $sr . ";";
		mysql_query($sqlquery);
			echo 'Srno: <input type="text" name="sr" value="'.$sr.'"><br>';
			echo 'First Name: <input type="text" name="fn" value="'.$fname.'"><br>';
			echo 'Middle name: <input type="text" name="mn" value="'.$mname.'"><br>';
			echo 'Last name: <input type="text" name="ln" value="'.$lname.'"><br>';
	}
	else
	{
		//Sql query
		$sqlquery="INSERT INTO person (srno, fname, mname, lname) VALUES (" . $sr . ", '" . $fname . "', '" . $mname . "', '" . $lname . "')";
		
		if(mysql_query($sqlquery))
		{
			echo 'Srno: <input type="text" name="sr" value="'.$sr.'"><br>';
			echo 'First Name: <input type="text" name="fn" value="'.$fname.'"><br>';
			echo 'Middle name: <input type="text" name="mn" value="'.$mname.'"><br>';
			echo 'Last name: <input type="text" name="ln" value="'.$lname.'"><br>';
		}
		else
		{
			echo "An error occured!";
		}
	}
}
else
{
	$result = mysql_query("SELECT * FROM person where srno=".$sr.";");
	//display the fields
	if(mysql_num_rows($result)>0)
	{
		while($res = mysql_fetch_array($result))
		{
			echo 'Srno: <input type="text" name="sr" value="'.$res['srno'].'"><br>';
			echo 'First Name: <input type="text" name="fn" value="'.$res['fname'].'"><br>';
			echo 'Middle name: <input type="text" name="mn" value="'.$res['mname'].'"><br>';
			echo 'Last name: <input type="text" name="ln" value="'.$res['lname'].'"><br>';
		}
	}
	else
	{
		echo 'Srno: <input type="text" name="sr" value=""><br>';
		echo 'First Name: <input type="text" name="fn" value=""><br>';
		echo 'Middle name: <input type="text" name="mn" value=""><br>';
		echo 'Last name: <input type="text" name="ln" value=""><br>';
	}
}

?>
<input type="submit" value="Submit"><br>
</form>
</body>
</html>