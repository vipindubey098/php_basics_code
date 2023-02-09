<html>

<head>
<title>Validation</title>
</head>
<body>
<?php
/*The preg_match() function searches string for pattern, 
returning true if pattern exists, and false otherwise.

If the optional input parameter pattern_array is provided,
 then pattern_array will contain various sections
 of the subpatterns contained in the search pattern, if applicable.
*/
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$un=$_POST['un'];
$pw=$_POST['pw'];
$rpw=$_POST['rpw'];

if(!$fn==""&&!$ln==""&&!$un==""&&!$pw==""&&!$rpw=="")
{
if(preg_match("/^[A-Z][-'a-zA-Z]+$/", $fn)==1) 
{ 
	$test_fn=true;
}
else
{
	$test_fn=false;
	echo "<br>Invalid first name!";
}

if(preg_match("/^[A-Z][-'a-zA-Z]+$/", $ln)==1) 
{ 
	$test_ln=true;
}
else
{
	$test_ln=false;
	echo "<br>Invalid last name!";
}

if(preg_match("/^[a-zA-Z]+(\_)*([a-zA-Z])$/", $un)==1) 
{ 
	$test_un=true;
}
else
{
	$test_un=false;
	echo "<br>Invalid username!";
}

if($pw===$rpw) 
{ 
	$test_pw=true;
}
else
{
	$test_pw=false;
	echo "<br>password and re-password dont match!";
}

if($test_fn==true&&$test_ln==true&&$test_un==true&&$test_pw==true)
{
	echo "Registration successful!";
}

}
else
{
	echo "Registration failed, All fields are mandatory";
}
?>
</body>
</html>