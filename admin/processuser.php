<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 9:12 PM
 */

include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/core.php');

$user = new user();

$pattern = '/(?<=\d).*((?<=[a-z]).*[A-Z]|(?<=[A-Z]).*[a-z])|(?<=[a-z]).*((?<=[A-Z]).*\d|(?<=\d).*[A-Z])|(?<=[A-Z]).*((?<=[a-z]).*\d|(?<=\d).*[a-z])/';
//$pass = trim($pass);
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (!empty($_POST['password']) && strlen($_POST['password']) > 7 && preg_match($pattern, $_POST['password']))
    {//not empty, match ANY character after trimming the string 8 or more times

        $myfirstname = mysqli_real_escape_string(user::$mysqli,$_POST['firstname']);
        $mylastname = mysqli_real_escape_string(user::$mysqli,$_POST['lastname']);
        $myemail = mysqli_real_escape_string(user::$mysqli,$_POST['email']);
        $mypassword = mysqli_real_escape_string(user::$mysqli,$_POST['password']);
        $myaddress = mysqli_real_escape_string(user::$mysqli,$_POST['streetaddress']);
        $mypostcode = mysqli_real_escape_string(user::$mysqli,$_POST['postcode']);
        $myphonehome = mysqli_real_escape_string(user::$mysqli,$_POST['phone_home']);
        $myphonemobile = mysqli_real_escape_string(user::$mysqli,$_POST['phone_mobile']);


        $myAccessLevelCheck = $_POST['accessLevel'];
        $encryptedMessage = md5($mypassword . SECRETHASH);

        if(isset($myAccessLevelCheck))
        {
            $myAccessLevel = mysqli_real_escape_string(user::$mysqli,$_POST['accessLevel']);
        }
        else
        {
            $myAccessLevel = 1;
        }

        //check username does not exists
        $sqlEmailCheck = user::query("SELECT * FROM staff_tbl WHERE email = '$myemail'")
        or die("Error: ".mysqli_error(user::$mysqli));
        $emailRow = mysqli_fetch_array($sqlEmailCheck);
        if($emailRow != null)
        {
            if($user->getAccessLevel($_SESSION['login_user']) == 100)
            {
                $page = "/admin/adduser.php";
            }
            else
            {
                $page = "/admin/adduser.php";
            }
            popup("Username exists, please choose another username",$page);
            exit($sqlEmailCheck);
        }

        db::query("INSERT INTO staff_tbl (firstName, surname, email, password,streetAddress, postCode ,homePhone , mobilePhone, access_level) VALUES ('$myfirstname', '$mylastname','$myemail','$encryptedMessage','$myaddress','$mypostcode','$myphonehome','$myphonemobile','$myAccessLevel')")
        or die("Error: ".mysqli_error(user::$mysqli));

        if($user->getAccessLevel($_SESSION['login_user']) == 100)
        {
            popup("Account Registered, Returning to Admin Dashboard","/index.php");
        }
        else
        {
            popup("Account Registered, Please login","/index.php");
        }
        die("Error");
        //echo 'Worked';
    }
    else
    {
        popup("Password not accepted, please try again.","/admin/adduser.php");
        die();
    }
}
else
{
    pageReturn("/index.php");
}