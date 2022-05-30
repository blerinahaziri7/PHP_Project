<?php

if(isset($_POST["submit"])) //Check if we have a submit button set 
{
    $name = $_POST["emri"];
    $surname = $_POST["mbiemri"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $confirmEmail = $_POST["confirmEmail"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    //Instantiate SignupContr class 
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($name, $surname, $username, $email,$confirmEmail, $password, $confirmPassword);
    
    //Running error handlers and user signup
    $signup->signupUser(); //Te signup controller
    header("location: ../examples/register-v2p.php?error=none");

    //Going back to front page
}