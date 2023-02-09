<html>
<head>
<title>String operations</title>
</head>
<body>
<?php
$s1=$_POST['s1'];
$s2=$_POST['s2'];

//For palindrome
echo "<br><br>Palindrome test:<br>";
$a = strrev($s1) ;
$b = strrev($s2);
if($a==$s1)
echo "String 1 is a palindrome!<br>";
else
echo "String 1 is not a palindrome!<br>";

if($b==$s2)
echo "String 2 is a palindrome!<br>";
else
echo "String 2 is not a palindrome!<br>";

//For length
echo "<br><br>Length of string:<br>";
echo "Length of String 1: ".strlen($s1)." characters<br>";
echo "Length of String 2: ".strlen($s2)." characters<br>";

//For concat
echo "<br><br>Concatenation of string:<br>";
echo "Concatenation of of String 1 & String 2: ".$s1.$s2;


//For compate
echo "<br><br>Comparison of string:<br>";
if(strcmp($s1,$s2)==0)
echo "Strings are equal!";
else
echo "Strings are not equal!";
?>
</body>
</html>