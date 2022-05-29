<?php

class SignupContr extends Signup{
    private $uid;
    private $pwd;

    public function __contruct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if($this->emptyInput() == false)
        {
            header("location: ../examples/loginS.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->uid, $this->pwd);
    }
    private function emptyInput()
    {
        $result;
        if(empty($this->$uid)||empty($this->$pwd))
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