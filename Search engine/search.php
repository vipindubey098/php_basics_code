<html>
<head>
<title>States</title>
</head>
<body>
<?php
$t1=$_POST['t1'];

$sear=array(
	0=>"http://www.google.com",
	1=>"http://www.yahoo.com",
	2=>"http://www.yahoomail.com",
	3=>"http://www.facebook.com",
	4=>"http://www.twitter.com",
	5=>"http://www.frndzone.com",
	6=>"http://www.myspace.com",
	7=>"http://www.astalavista.com",
	8=>"http://www.apple.com",
	9=>"http://www.microsoft.com",
	10=>"http://www.oracle.com",
	11=>"http://www.gmail.com",
	12=>"http://www.rediff.com"
);

echo "<b>Search Results:</b><br>";

foreach($sear as $term) 
{ 
   if(stristr($term, $t1)) 
   { 
        echo "<br><a href='".$term."'>".$term."</a><br>";
   } 
}
?>
</body>
</html>