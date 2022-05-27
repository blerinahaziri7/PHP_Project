<?php

$serverName = "locahost";
$dbUserName = "root";
$dbPassword = "1172058627";
$dbName = "studentmanagementsystem";


$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";