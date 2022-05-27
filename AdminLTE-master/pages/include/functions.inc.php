<?php

function emptyInputSignup($ID, $name, $surname, $username, $email, $confirmemail, $password, $confirmpassword)
{
   $result;
   if(empty($ID) || empty($name) || empty($surname)  || empty($username) || empty($email) || empty($confirmemail) || empty($password) || empty($confirmpassword)) //if there is or there is not data inside what we paste in the function
   {
        $result = true; //There is a mistake here
   }
   else 
   {
        $result = false;
   }
   return $result;
}

function invalidUid($username)
{
   $result;
   if(preg_match('/^[a-zA-Z0-9]{5,}$/', $username))
   {
       $result = true;
   }
   else 
   {
        $result = false;
   }
   return $result;
}

function invalidEmail($email)
{
   $result;
   $regex = '/^[a-z0-9]+@student.uni-pr.edu$/';  
   if (!preg_match($regex, $email)) {
    $result = true;
   } else { 
    $result = false;
   }          
   return $result;
}
function pwdMatch($password, $confirmpassword)
{
   $result;
   if($password !== $confirmpassword) 
   {
        $result = true; 
   }
   else 
   {
        $result = false;
   }
   return $result;
}
function emailMatch($email, $confirmemail)
{
   $result;
   if($email !== $confirmemail) 
   {
        $result = true; 
   }
   else 
   {
        $result = false;
   }
   return $result;
}

function emailMatch($email, $confirmemail)
{
   $result;
   if($email !== $confirmemail) 
   {
        $result = true; 
   }
   else 
   {
        $result = false;
   }
   return $result;
}
function emailMatch($username, $email, $conn)
{
   $result;
   if($email !== $confirmemail) 
   {
        $query = "SELECT Roll_No, Name FROM `Student Details`;";
        // FETCHING DATA FROM DATABASE
        $r = mysqli_query($conn, $query);

        if (mysqli_num_rows($r) > 0) {
            // OUTPUT DATA OF EACH ROW
            while($row = mysqli_fetch_assoc($r)) {
                echo "Roll No: " . $row["Roll_No"]
                . " - Name: " . $row["Name"]. "<br>";
            }
        
        $result = true; 
   }
   else 
   {
        $result = false;
   }
   return $result;
}