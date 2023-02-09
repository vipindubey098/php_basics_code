<?php
session_start();
$_session['username']="avantika";
echo $_session['username'];

$myname= $_session['username'];
echo $myname;
?>