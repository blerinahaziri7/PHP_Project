<?php

//if the user submitted the form the proper way then we want to run the php code inside
//but if they didn't then we want to sent them back to the sign up page
if(isset($_POST["submit"]))
{
    //grapp the data
    $ID = htmlentities($_POST["NrIndex"]);
    $name = htmlentities($_POST["emri"]);
    $surname = htmlentities($_POST["mbiemri"]);
    $username = htmlentities($_POST["username"]);
    $email = htmlentities($_POST["email"]);
    $confirmemail =htmlentities($_POST["confirmemail"]);
    $password = htmlentities($_POST["password"]);
    $confirmpassword = htmlentities($_POST["confirmpassword"]);
    
    //error handling
    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    //if the user left any inputs empty
    if(emptyInputSignup($ID, $name, $surname, $username, $email, $confirmemail, $password, $confirmpassword) !== false) //if there is anything beside false then throw an error
                                     //there is a difference between is it equal to true or it is not equal to false
    {
        header("location: ../../index.php?error=emptyinput");
        exit(); //we are going to stop the script from running
    }
    if(invalidUid($username) !== false)
    {
        header("location: ../../index.php?error=invalidUserID");   
        exit(); 
    }
    if(invalidEmail($email) !== false)
    {
        header("location: ../../index.php?error=passwordsdonotmatch");  

        exit(); 
    } 
    if(emailMatch($email, $confirmemail) !== false)
    {
        header("location: ../../index.php?error=passwordsdonotmatch");   
        exit(); 
    }
    if(pwdMatch($password, $confirmpassword) !== false)
    {
        header("location: ../../index.php?error=passwordsdonotmatch");   
        exit(); 
    }
    //
    if(userExists($username, $email, $conn) !== false)
    {
        header("location: ../../index.php?error=userExists");   
        exit(); 
    }
}
else
{
    header("location: ../../index.php");
    exit();
}
