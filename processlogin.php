<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 11:16 PM
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/include/core.php');
$user = new user();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $email = mysqli_real_escape_string($user::$mysqli,$_POST['email']);
    $password = mysqli_real_escape_string($user::$mysqli,$_POST['password']);

    $login = $user::login($email,$password);
    if($login)
    {
        popup("Login Successful","/index.php");
    }
    else
    {

      popup("Invalid Username or Password","/index.php");
    }
}