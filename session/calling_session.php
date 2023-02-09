<?php
session_start();
$myname=$_SESSION['username'];
echo "welcome". $myname;
?>