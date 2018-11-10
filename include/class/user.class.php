<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 8:38 PM
 */

class user extends db
{
    public static function login($email,$password)
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $hashedpassword = md5($password . SECRETHASH);
        $strippedemail = mysqli_real_escape_string(db::$mysqli,$email);
        $loginsql = "SELECT payroll_ID, email, password, access_level FROM staff_tbl WHERE email = '" . $strippedemail . "'AND password = '" . $hashedpassword . "'";
        $row = self::query($loginsql);
        $user_data = mysqli_fetch_array($row);
        $row_count = $row->num_rows;
        if($row_count == 1)
        {
            $_SESSION["email"] = $user_data['email'];
            $_SESSION["access_access"] = $user_data['access_level'];
            $_SESSION["payrollid"] = $user_data['payroll_ID'];
            $RNGsessionid = bin2hex(openssl_random_pseudo_bytes(16));
            $updatesql = "UPDATE staff_tbl SET session = '". $RNGsessionid ."' WHERE email ='" . $_POST["email"] . "'";
            $result = self::query($updatesql) or
            die(mysqli_connect_error());
            $_SESSION['sessionid'] = $RNGsessionid;
            return $result;
        }
        else{
            popup('Invalid Username or Password!',"/index.php");
        }
    }

    public static function getAccessLevel($email)
    {
        $accessCheckSQL = "SELECT access_level FROM staff_tbl WHERE email = '$email'";

        $result = mysqli_query(self::$mysqli,$accessCheckSQL);
        $user_data = mysqli_fetch_array($result);
        $count_row = $result->num_rows;
        if($count_row == 1)
        {
            return $user_data['access_level'];
        }
        else {
            return 0;
        }
    }

    public static function getSessionID($email){
        $checkSQL = "SELECT session FROM staff_tbl WHERE email = '$email'";

        $result = db::query($checkSQL);
        $user_data = mysqli_fetch_array($result);

        if ($result->num_rows == 1)
        {
            return $user_data['session'];
        }
        else
        {
            return 0;
        }

    }
}