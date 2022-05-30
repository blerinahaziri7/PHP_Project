<?php
//destroy session variables 
session_start();
session_unset();
session_destroy(); 
header("location: ../../index.php");
exit(); //we are going to stop the script from running