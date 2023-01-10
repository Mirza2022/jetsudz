<?php

include "dbConnect.php";

class SignUp extends Database
{
    protected function setUser($firstName, $lastName, $email, $phoneNumber, $address, $city, $state, $zip, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO user (firstName, lastName, email, phoneNumber, userAddress, pwd) VALUES (?, ?, ?, ?, ?, ?)');

        //hash the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt->bindParam(1, $firstName, PDO::PARAM_STR);
        $stmt->bindParam(2, $lastName, PDO::PARAM_STR);
        $stmt->bindParam(3, $email, PDO::PARAM_STR);
        $stmt->bindParam(4, $phoneNumber, PDO::PARAM_STR);
        $stmt->bindParam(5, $address, PDO::PARAM_STR);
        $stmt->bindParam(6, $hashedPwd, PDO::PARAM_STR);
        if (!$stmt->execute()) {
            $stmt = null; //delete the statement
            header("location: ../index.php?error=newUserFailed");
            exit();
            //echo 'not inserted!';
        }
    }

    //function to check if the user already exists by email 

    protected function checkUser($firstName, $lastName, $email)
    {
        $stmt = $this->connect()->prepare('SELECT email FROM user WHERE email = ? OR (firstName = ? AND lastName =?);');
        $stmt->bindParam(1, $email, PDO::PARAM_STR);
        $stmt->bindParam(2, $firstName, PDO::PARAM_STR);
        $stmt->bindParam(3, $lastName, PDO::PARAM_STR);
        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=userexists");
            exit();
            //echo "not checked";
        }


        $result = false;
        if ($stmt->rowCount() > 0) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    /*
    protected function checkRole($email)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM user WHERE email = ? AND priv = " ";');
        $stmt->bindParam(1, $email, PDO::PARAM_STR);
        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=searchFailed");
            exit();
        }
        $result = false;
        if ($stmt->rowCount() > 0) {
            header("location: ../inc/message.php?");
            exit();
        } else {
            header("location: ../dashboard.php?error=none");
        }
        return $result;
    } */
}
