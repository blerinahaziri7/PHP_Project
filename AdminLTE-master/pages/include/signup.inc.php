<?php
    require_once 'db.inc.php';
    require_once 'functions.inc.php';
//if the user submitted the form the proper way then we want to run the php code inside
//but if they didn't then we want to sent them back to the sign up page
if(isset($_POST["submit"]))
{
    //grapp the data
    //$ID = htmlentities($_POST["NrIndex"]);
    $name = mysqli_real_escape_string($conn, $_POST["emri"]);
    $surname = mysqli_real_escape_string($conn, $_POST["mbiemri"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $confirmemail = mysqli_real_escape_string($conn,$_POST["confirmemail"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);
    
    //error handling

    //$error;
    //if the user left any inputs empty
    if(emptyInputSignup($name, $surname, $username, $email, $confirmemail, $password, $confirmpassword) !== false) //if there is anything beside false then throw an error
                                     //there is a difference between is it equal to true or it is not equal to false
    {
        header("location: ../examples/register-v2.php?error=emptyInput");
        exit(); //we are going to stop the script from running
    }
    if(invalidUid($username) !== false)
    {
        header("location: ../examples/register-v2.php?error=invalidUserID");   
        exit(); 
    }
    if(invalidEmail($email) !== false)
    {
        header("location: ../examples/register-v2.php?error=invalidEmail");  

        exit(); 
    } 
    if(emailMatch($email, $confirmemail) !== false)
    {
        header("location: ../examples/register-v2.php?error=emailsDoNotMatch");   
        exit(); 
    }
    //if(validPassword($password)!==false)
    //{
     //   header("location: ../examples/register-v2.php?error=invalidPassowrd");   
      //  exit(); 
   // }
    if(pwdMatch($password, $confirmpassword) !== false)
    {
        header("location: ../examples/register-v2.php?error=passwordsdonotmatch");   
        exit(); 
    }
    if(userExists($conn, $username, $email) !== false)
    {
        header("location: ../examples/register-v2.php?error=userExists");   
        exit(); 
    }
    createUser($conn, $name, $surname, $username, $email, $password);

}
else
{
    header("location: ../examples/register-v2.php");
    exit();
}
