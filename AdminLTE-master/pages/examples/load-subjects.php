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
    $sql="SELECT* FROM lenda LIMIT $commentNewCount";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo ("<p>");
        echo ($row['semestri']);
        echo ("<br>");
        echo ($row['emri']);
        echo "</p>";
        echo("<br>");
        echo('<a href="../examples/ShtoLende.php">
                      <button type="button" name="button" value="Shto lende" style="border: none; background-color:lightblue; border-radius: 5px;font-size: large; padding: 5px;">Modifiko</button>
                    </a>');
                    echo("<hr>");
    }
    }else{
    echo "Nuk ka asnje lende!";
    }

        
   

?>