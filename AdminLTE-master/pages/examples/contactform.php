<?php
require_once '../include/db.inc.php';
  // SQL QUERY
  $query = "SELECT * FROM `student`;";
   // FETCHING DATA FROM DATABASE
   $result = $conn->query($query);
  
   if ($result->num_rows > 0) 
   {
       // OUTPUT DATA OF EACH ROW
       while($row = $result->fetch_assoc())
       {
            $name=$row["emri"];
            $surname=$row["mbiemri"];
            $mailFrom=$row["email"];
       }
   } 
   else {
       echo "0 results";
   }

   if(isset($_POST['submit']))
   {
       $mailTo=$_POST['To'];
       $subject=$_POST['subject'];
       $message=$_POST['message'];
   }

   $headers="From: ".$mailFrom;
   mail($mailFrom,$subject, $message, $headers);
   header("location: email.php?error=emailSent"); 