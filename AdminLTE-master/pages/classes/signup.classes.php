<?php

class Signup extends Dbh {
    //We have to extend so we can use the connection
    protected function setUser($name, $surname, $username, $email, $password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO profesor (emri, mbiemri, username, email, password) VALUES (?, ?, ?, ?, ?);'); //We are referencing to the connect method within our function inside the database handler
                                   //with this statement we want to query something inside the database
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($name, $surname, $username, $email, $hashedPassword))) //assign actual data,  ? marks instead to separate the data from the query
        {
            $stmt = null;
            header("location: ../examples/register-v2p.php?error=stmtfailed");
            exit();  
        }
        $stmt=null;

    }
    protected function checkUser($username, $email)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM profesor WHERE username = ? OR email = ?;'); //We are referencing to the connect method within our function inside the database handler
                                   //with this statement we want to query something inside the database
        if(!$stmt->execute(array($username, $email))) //assign actual data,  ? marks instead to separate the data from the query
        {
            $stmt = null;
            header("location: ../examples/register-v2p.php?error=stmtfailed");
            exit();  
        }

        //if we have any rows
        $resultCheck;
        if($stmt->rowCount()>0)
        {
            $resultCheck=false;
        }
        else
        {
            $resultCheck=true;
        }
        return $resultCheck;

    }
}