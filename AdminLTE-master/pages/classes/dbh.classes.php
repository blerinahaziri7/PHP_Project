<?php
//database class that is going to open up a database connection

class Dbh{
    protected function connect() // Basically a method. Na duhet me extend e klasat qe e bojn extend me mujt me perdore.
    {
        try 
        {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=studentmanagementsystem',$username, $password);
            return $dbh;
        } 
        catch (PDOException $e) 
        {
            print "Error!: ".$e->getMessage()."<br/>";
            die();
        }
    }
}