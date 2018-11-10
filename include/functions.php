<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 8:47 PM
 */

function classAutoLoad($class)
{
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/include/class/' . $class . '.class.php');
}

function popup($string,$returnpage)
{
    echo "<script type='text/javascript'>alert('$string');</script>";
    header("refresh:0; url=". siteroot() . $returnpage);
    die();
}

function siteroot()
{
    return "http://" . $_SERVER['SERVER_NAME'];
}

function pageReturn($string)
{
    header("refresh:0; url=" . siteroot() . $string);
}

function adminCheck($email)
{
    include_once($_SERVER['DOCUMENT_ROOT'] . '/include/core.php');
    $user = new user();
    if(user::getAccessLevel($email) >= 90)
    {
        //popup("Unauthorised Access", "/index.php");
        //die();
        //http_redirect("index.php");
        return true;
    }
    else {
        return false;
    }
}