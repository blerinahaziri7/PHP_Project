<?php 
$serverName = "locahost";
$dbUserName = "root";
$dbPassword = "1172058627";
$dbName = "studentmanagementsystem";

$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}

    $commentNewCount = $_POST["commentNewCount"];
    $sql="SELECT* FROM lendet LIMIT $commentNewCount";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo ("<p>");
        echo ($row['semestri']);
        echo ("<br>");
        echo ($row['emri']);
        echo "</p>";
    }
    }else{
    echo "Nuk ka asnje lende!";
    }
?>