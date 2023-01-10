<?php

include "../model/loginMod.php";

class LoginUserCtrl extends Login
{

    //properties

    private $email;
    private $pwd;

    //methods

    public function __construct($email, $pwd)
    {

        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            //echo "empty input";
            header("location: ../?error=emptyinput");
            exit();
        }

        if ($this->badEmail() == false) {
            //echo "bad email";
            header("location: ../?error=invalidemail");
            exit();
        }


        $this->getUser($this->email, $this->pwd);
        //$this->checkRole($this->email);
    }
    //to check for empties

    private function emptyInput()
    {
        $result = false;
        if (empty($this->email) ||  empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //to check for bad emails

    private function badEmail()
    {
        $result = false;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
