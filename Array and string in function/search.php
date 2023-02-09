<html>
<head>
<title>function</title>
</head>
<body>
<?php

$url_array=array(
	"google"=>"http://www.google.com",
	"yahoo"=>"http://www.yahoo.com",
	"yahoomail"=>"http://www.yahoomail.com",
	"facebook"=>"http://www.facebook.com",
	"twitter"=>"http://www.twitter.com",
	"frndzone"=>"http://www.frndzone.com",
	"myspace"=>"http://www.myspace.com",
	"astalavista"=>"http://www.astalavista.com",
	"apple"=>"http://www.apple.com",
	"microsoft"=>"http://www.microsoft.com",
	"oracle"=>"http://www.oracle.com",
	"gmail"=>"http://www.gmail.com",
	"rediff"=>"http://www.rediff.com"
);

$t1=$_POST['t1'];

function getUrl($input_array=array(), $str)
{
echo "<b>Search Results:</b><br>";

foreach($input_array as $term) 
{ 
   if(stristr($term, $str)) 
   { 
        echo "<br><a href='".$term."'>".$term."</a><br>";
   } 
}
}

getUrl($url_array, $t1);
?>
</body>
</html>