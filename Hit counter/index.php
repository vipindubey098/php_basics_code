<html>
<head>
<title>Hit counter</title>
</head>
<body>
<?php
session_start();

if(!isset($_SESSION["viscount"]))
{
	$_SESSION["viscount"]=0;
}

if($_SESSION["viscount"]=="")
{
	$uservisit = 0;
}
else
{
	$uservisit = $_SESSION["viscount"];
}
  $hitfile = "count.txt";
  if (file_exists($hitfile))
  {
      $fp = fopen($hitfile,"r+"); 		                  
      $hits=fread($fp,filesize($hitfile));
  	      fseek($fp,0);
  		  ftruncate($fp,0); 			                  
  		  $hits++;
		  $uservisit++;
  		  fwrite($fp,$hits);
          $_SESSION["viscount"] = $uservisit;
      fclose($fp);
	  echo "You have visited the site: ".$uservisit;
	  echo "<br>Total visit of the site: ".$hits;
  }
  else
  {
	echo "Hit file not found!";  
  }
?>
</body>
</html>