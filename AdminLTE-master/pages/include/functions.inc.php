<?php

function emptyInputSignup( $name, $surname, $username, $email, $confirmemail, $password, $confirmpassword)
{
   $result;
   if(empty($name) || empty($surname)  || empty($username) || empty($email) || empty($confirmemail) || empty($password) || empty($confirmpassword)) //if there is or there is not data inside what we paste in the function
   {
          //$error="Please fill all the fields";
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
       $result = false;
   }
   else 
   {
        $result = true;
   }
   return $result;
}

function invalidEmail($email)
{
   $result;
   $regex = '/^[a-z0-9A-Z]+@student.uni-pr.edu$/';  
   if (!preg_match($regex, $email)) {
    $result = true;
   } else { 
    $result = false;
   }          
   return $result;
}
//function validPassword($password)
//{
  //   $result;
  //   if (strlen($password) <= '8') {
   //       //$passwordErr = "Your Password Must Contain At Least 8 Characters!";
  //        $result=true;
  //    }
  //    elseif(!preg_match("#[0-9]+#",$password)) {
  //        //$passwordErr = "Your Password Must Contain At Least 1 Number!";
   ///       $result=true;
  //    }
 //     elseif(!preg_match("#[A-Z]+#",$password)) {
  //        //$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
  //        $result=true;
 //     }
  //    elseif(!preg_match("#[a-z]+#",$password)) {
  //        //$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
  //        $result=true;
  //    }
  //    return $result;
//}
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

function userExists($conn, $username, $email)
{
     $sql = "SELECT * FROM student WHERE username = ? OR email = ?;"; //;;
     $stmt = mysqli_stmt_init($conn);
     
     if(!mysqli_stmt_prepare($stmt, $sql)) //run this sql statement inside the database and see if there is an error
     {
          header("location: ../examples/register-v2.php?error=stmtFailed");   
          exit(); 
     }

     //If this didn't failed i insertojme te dhenat ne databaze
     mysqli_stmt_bind_param($stmt, "ss",$username, $email ); //the data that we are submiting are ss se jon dy strings
     mysqli_stmt_execute($stmt); //which statement we are exceuting   
     $resultData = mysqli_stmt_get_result($stmt); //we want to grap data from this statement

     //Check if there a result from this statement
     if($row = mysqli_fetch_assoc($resultData)) //we are fetching the data as an associative array
     {
          return $row; //We are returning all the data from the database if this user exists inside the database
                       //Te login kemi me perdore qe me login the user
     }
     else{
          $result = false;
          return false;
     }
     mysqli_stmt_close($stmt);
}
function createUser($conn, $name, $surname, $username, $email, $password)
{
     $sql = "INSERT INTO student (emri, mbiemri, username, email, password) VALUES (?, ?, ?, ?, ?);"; //;;
     $stmt = mysqli_stmt_init($conn);
     
     if(!mysqli_stmt_prepare($stmt, $sql)) //run this sql statement inside the database and see if there is an error
     {                                     //is this possible in database
          header("location: ../examples/register-v2.php?error=stmtFailed");   
          exit(); 
     }


     //Hashing the password
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //The latest version me hash

     //If this didn't failed i insertojme te dhenat ne databaze
     mysqli_stmt_bind_param($stmt, "sssss",$name, $surname, $username, $email, $hashedPassword); //the data that we are submiting are ss se jon dy strings
     mysqli_stmt_execute($stmt); //which statement we are exceuting  
     header("location: ../examples/register-v2.php?error=none");   
     exit(); 
}

function emptyInputLogin($username, $password)
{
   $result;
   if(empty($username) || empty($password))
   {
          //$error="Please fill all the fields";
          $result = true; //There is a mistake here
   }
   else 
   {
        $result = false;
   }
   return $result;
}

function loginUser($conn, $username, $password)
{
   $uidExists = userExists($conn, $username, $username); //We are asking either for username or email 

   if($uidExists===false)
   {
     header("location: ../../loginS.php?error=wrongLogin");
     exit(); //we are going to stop the script from running
   }

   $pwdHashed = $uidExists["password"]; //beacuse this is an associative array
   $checkPwd = password_verify($password, $pwdHashed);

   if($checkPwd === false)
   {
     header("location: ../../loginS.php?error=wrongLogin");
     exit(); //we are going to stop the script from running
   }
   else if($checkPwd === true)
   {
     session_start();
     $_SESSION["username"] = $uidExists["username"];
     $_SESSION["password"] = $uidExists["password"]; 
     header("location: ../examples/profileS.php");
     exit(); //we are going to stop the script from running
   }
}
