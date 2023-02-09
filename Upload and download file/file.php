<html>
<head>
<title>File</title>
</head>
<body>
<?php
$name = $_FILES["fileToUpload"]["name"];
list($txt, $ext) = explode(".", $name);
$actual_file_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
$tmp = $_FILES["fileToUpload"]["tmp_name"]; 

$temp_dnld = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$parts = explode('/', $_SERVER['PHP_SELF']);

$dnld_link = str_replace($parts[count($parts) - 1], "file/".$actual_file_name,  $temp_dnld);
							
if(copy($tmp, "file/".$actual_file_name))
{
	echo "<table border=\"1\">";
	echo "<tr><td>Client Filename: </td>
	   <td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
	echo "<tr><td>File Type: </td>
	   <td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
	echo "<tr><td>File Size: </td>
	   <td>" . ($_FILES["fileToUpload"]["size"] / 100000) . " Kb</td></tr>";
	echo "<tr><td>Name of Temp File: </td>
	   <td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
	echo "<tr><td>Download Link: </td>
	   <td><a href='" . "http://" . $dnld_link . "'>Download the file</a></td></tr>";
	echo "</table>";
}
?>
</body>
</html>