<html>
<head>
<title>Result</title>
</head>
<body>
<?php
$n1=$_POST['n1'];
$opt=$_POST['opt'];
switch($opt)
{
	case 1:
	echo $n1."Meter(s) = ".($n1*3.281)." Feet(s)";
	break;
	case 2:
	echo $n1." <sup>o</sup>C = ".(($n1*9/5)+32)." <sup>o</sup>F";
	break;
	case 3:
	echo "$ ".$n1." = Rs. ".($n1*55);
	break;
}
?>
</body>
</html>