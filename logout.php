<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/10/2018
 * Time: 1:54 AM
 */

if (session_status() == PHP_SESSION_NONE) {
    //session_start();
}
include_once($_SERVER['DOCUMENT_ROOT'] . '/include/core.php');
$db = new db();
    //echo 'logout';
    $updatesql = "UPDATE user_account SET session = NULL WHERE email='" . $_SESSION["email"] . "'";

    $result = db::query($updatesql) or
    die(mysqli_connect_error());
    $_SESSION["email"] = "";
    $_SESSION["sessionid"] = "";
    session_destroy();
    pageReturn("/index.php");

?>