<?php
    require_once 'db.inc.php';
    require_once 'functions.inc.php';

if(isset($_POST["submit"]))
{
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    if(emptyInputLogin($username, $password) !== false) //if there is anything beside false then throw an error
    //there is a difference between is it equal to true or it is not equal to false
    {
        header("location: ../../loginS.php?error=emptyInput");
        exit(); //we are going to stop the script from running
    }

    loginUser($conn, $username, $password);
}
else
{
    header("location: ../../loginS.php?error=emptyInput");
    exit(); //we are going to stop the script from running
}