<?php

$serverName = "locahost";
$dbUserName = "root";
$dbPassword = "1172058627";
$dbName = "studentmanagementsystem";


$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}


