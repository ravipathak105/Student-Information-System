<?php  
session_start();
session_destroy();
 echo "<script>alert('You Have Logged Out')</script>";
header('refresh:1;url=index.html');




?>