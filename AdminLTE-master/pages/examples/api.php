<?php
   $ServerName='localhost:3307';
   $Username='root';
   $Password='';
   $DBName = "studentmanagementsystem";
   
   $conn=mysqli_connect($ServerName,$Username,$Password,"$DBName");
//$conn = mysqli_connect("localhost", "root", "", "studentmanagementsystem");
$response=array();
if($conn){
  $sql="SELECT * from detyrat";
  $result = mysqli_query($conn, $sql);
  if($result){
    $i=0;
    while($row=mysqli_fetch_assoc($result)){
      $response[$i]['DetyraID'] = $row['DetyraID'];
      $response[$i]['titulli'] = $row['titulli'];
      $response[$i]['pershkrimi'] = $row['pershkrimi'];
      $i++;
    }
    echo json_encode($response,JSON_PRETTY_PRINT);
  }
}
else{
  echo"Database connection failed";
}
?>
