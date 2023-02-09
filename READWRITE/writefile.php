<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "FYMCA/DIV A & B\n";
fwrite($myfile, $txt);

fclose($myfile);
echo "data written successfully";
?>
