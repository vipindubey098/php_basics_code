<?php
 session_start();
 if(!session_is_registered(myusername)){
 header("location:index.html");
 }
 ?>
 <html>
 <body>
 Login Successful <a href="logout.php">Logout</a>
 </body>
 </html>