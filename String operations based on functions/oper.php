<html>
<head>
<title>Function</title>
</head>
<body>
<?php
//For palindrome
function palin($str1, $trs2)
{
echo "<br><br>Palindrome test:<br>";
$a = strrev($str1) ;
if($a==$str1)
echo "String is a palindrome!<br>";
else
echo "String is not a palindrome!<br>";
}

//For length
function len($str1)
{
echo "<br><br>Length of string:<br>";
echo "Length of String: ".strlen($str1)." characters<br>";
}

//For concat
function concate($str1, $str2)
{
echo "<br><br>Concatenation of string:<br>";
echo "Concatenation of of String 1 & String 2: ".$str1.$str2;
}


//For compate
function compare($str1, $str2)
{
echo "<br><br>Comparison of string:<br>";
if(strcmp($str1,$str2)==0)
echo "Strings are equal!";
else
echo "Strings are not equal!";
}

$s1=$_POST['s1'];
$s2=$_POST['s2'];

palin($s1);
palin($s2);

len($s1);
len($s2);

concate($s1,$s2);

compare($s1,$s2);

?>
</body>
</html>