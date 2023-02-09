<html>
<head>
<title>Result</title>
</head>
<body>
<?php
if(is_numeric($_POST['n1'])&&is_numeric($_POST['n2']))
{
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$opt=$_POST['opt'];
switch($opt)
{
	case 1:
	echo "Addition: ".($n1+$n2);
	break;
	case 2:
	echo "Subtraction: ".($n1-$n2);
	break;
	case 3:
	echo "Multiplication: ".($n1*$n2);
	break;
	case 4:
	echo "Division: ".($n1/$n2);
	break;
}
}
else
{
	echo "Invalid input! <a href='index.html'>try again</a>";
}
?>
</body>
</html>