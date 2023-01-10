<?php

if (isset($_POST['signUp'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $pwd = $_POST['pwd'];
    $confirmPwd = $_POST['confirmPwd'];
}

//instantiate the controller class

//include "../model/dbConnect.php";
//include "../control/signUpMod.php";
include "../controller/signUpCon.php";

$signUp = new SignUpUserCtrl($firstName, $lastName, $email, $phoneNumber, $address, $city, $state, $zip, $pwd, $confirmPwd);

//run error handling

$signUp->signUpUser();

//go back to page

header("location: ../index.php?error=none");
