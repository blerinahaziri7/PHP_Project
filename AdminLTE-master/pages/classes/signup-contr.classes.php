<?php

class SignupContr extends Signup{

    //private se other classes nuk kane nevoje me pase qasje ne to
    private $name;
    private $surname;
    private $username;
    private $email;
    private $confirmEmail;
    private $password;
    private $confirmPassword;

    public function __construct($name, $surname, $username, $email,$confirmEmail, $password, $confirmPassword) //data graped from the user
    {
        //We want to grap the data that the user submitted using the signup form and assign them to these properties
        $this->name=$name;
        $this->surname=$surname;
        $this->username=$username;
        $this->email=$email;
        $this->confirmEmail=$confirmEmail;
        $this->password=$password;
        $this->confirmPassword=$confirmPassword;

    }
    public function signupUser()
    {
        if($this->emptyInput()==false)
        {
            //echo "Empty input";
            header("location: ../examples/register-v2p.php?error=emptyInput");
            exit();  
        }
        if($this->invalidUid()==false)
        {
            //echo "Invalid username";
            header("location: ../examples/register-v2p.php?error=username");
            exit();  
        }
        if($this->invalidEmail()==false)
        {
            //echo "Invalid Email";
            header("location: ../examples/register-v2p.php?error=invalidEmail");
            exit();  
        }
        if($this->pwdMatch()==false)
        {
            //echo "Passwords do not match";
            header("location: ../examples/register-v2p.php?error=passwordsDoNotMatch");
            exit();  
        }
        if($this->emailMatch()==false)
        {
            //echo "Emails do not match";
            header("location: ../examples/register-v2p.php?error=emailsDoNotMatch");
            exit();  
        }
        if($this->uidTakenCheck()==false)
        {
            //echo "This user alerady exists";
            header("location: ../examples/register-v2p.php?error=userExists");
            exit();  
        }

        $this->setUser($this->name, $this->surname, $this->username, $this->email,$this->password);
    }
    private function emptyInput()
    {
        $result;
        if(empty($this->name) || empty($this->surname)  || empty($this->username) || empty($this->email) || empty($this->confirmEmail) || empty($this->password) || empty($this->confirmPassword)) //if there is or there is not data inside what we paste in the function
        {
            //$error="Please fill all the fields";
            $result = false; //There is a mistake here
        }
        else 
        {
            $result = true;
        }
        return $result;
    } 
    private function invalidUid()
    {
        $result;
        if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $this->username))
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result;
        $regex = '/^[a-z0-9A-Z]+\.[a-z0-9A-Z]+@uni-pr.edu$/';  
        if (!preg_match($regex, $this->email)) 
        {
            $result = false;
        } else 
        { 
            $result = true;
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
    private function pwdMatch()
    {
        $result;
        if($this->password !== $this->confirmPassword) 
        {
            $result = false; 
        }    
        else 
        {
            $result = true;
        }
        return $result;
    }
    private function emailMatch()
    {
        $result;
        if($this->email !== $this->confirmEmail) 
        {
            $result = false; 
        }    
        else 
        {
            $result = true;
        }
        return $result;
    }
    private function uidTakenCheck()
    {
        $result;
        if(!$this->checkUser($this->username, $this->email)) 
        {
            $result = false; 
        }
        else 
        {
            $result = true;
        }
        return $result;
    }
}