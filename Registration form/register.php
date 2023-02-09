<html>
<head>
<title>Validate</title>
</head>
<body>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$mobile=$_POST['mobileno'];
$email=$_POST['email'];

$hostname = 'localhost';        // MySQL hostname.
$dbname   = 'MCA';         	// Database name.
$dbusername = 'root';             // Database username.
$dbpassword = 'life';             // Database password.

if($password==$repassword)
{
	// Let's connect to host
	$con=mysql_connect($hostname, $dbusername, $dbpassword) or DIE('Connection to host is failed, perhaps the service is down!');
	
	// Select the database
	mysql_select_db($dbname, $con) or DIE('Database name is not available!');
	
	$query=mysql_query("INSERT INTO registration (username, mobno, email, password) VALUES ('".$username."', '".$mobile."','".$email."', '".$password."')");
	
	if($query)
	{
		echo "Registred successfully..!!";
	}
	else
	{
		echo "unable to registred !!";
	}
}
else
{
	echo "Password and repassword missmatch!!";
}
?>
</body>
</html>