<?php

include "../model/signUpMod.php";

class SignUpUserCtrl extends SignUp
{

    //properties
    private $firstName;
    private $lastName;
    private $email;
    private $phoneNumber;
    private $address;
    private $city;
    private $state;
    private $zip;
    private $pwd;
    private $confirmPwd;

    //methods

    public function __construct($firstName, $lastName, $email, $phoneNumber, $address, $city, $state, $zip, $pwd, $confirmPwd)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
        $this->pwd = $pwd;
        $this->confirmPwd = $confirmPwd;
    }

    public function SignUpUser()
    {
        if ($this->emptyInput() == false) {
            //echo "empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        if ($this->badChars() == false) {
            //echo "bad characters";
            header("location: ../index.php?error=invalidinput");
            exit();
        }

        if ($this->badEmail() == false) {
            //echo "bad email";
            header("location: ../index.php?error=invalidemail");
            exit();
        }

        if ($this->passMatch() == false) {
            //echo "password mismatch";
            header("location: ../index.php?error=nomatchingpwd");
            exit();
        }

        if ($this->userExist() == false) {
            //echo "user exists";
            header("location: ../index.php?error=userexists");
            exit();
        }

        $this->setUser($this->firstName, $this->lastName, $this->email, $this->phoneNumber, $this->address, $this->city, $this->state, $this->zip, $this->pwd);
        //$this->checkRole($this->email);
    }
    //to check for empties

    private function emptyInput()
    {
        $result = false;
        if (empty($this->firstName) || empty($this->lastName) || empty($this->email) || empty($this->pwd) || empty($this->confirmPwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //to check for bad/ unwanted characters

    private function badChars()
    {
        $result = false;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->firstName) || !preg_match("/^[a-zA-Z0-9]*$/", $this->lastName)) {
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

    //to check if passs match

    private function passMatch()
    {
        $result = false;
        if ($this->pwd !== $this->confirmPwd) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //to check if user already exists - done after...

    private function userExist()
    {
        $result = false;
        if (!$this->checkUser($this->firstName, $this->lastName, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
