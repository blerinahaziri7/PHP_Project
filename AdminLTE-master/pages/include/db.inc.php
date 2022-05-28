<?php

$serverName = "locahost";
$dbUserName = "root";
$dbPassword = "Fjorki1379!";
$dbName = "studentmanagementsystem";


$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");

if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}


