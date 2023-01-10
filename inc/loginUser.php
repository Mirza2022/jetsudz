<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
}

//instantiate the controller class

include "../controller/loginCon.php";

$login = new LoginUserCtrl($email, $pwd);

//run error handling

$login->loginUser();

//go back to page

//header("location: ../index.php?error=none");
