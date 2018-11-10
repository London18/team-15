s<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/10/2018
 * Time: 4:00 AM
 */
session_start();
include_once($_SERVER['DOCUMENT_ROOT'] . '/include/core.php');
$db = new db();
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if($_SESSION['email'] != null)
    {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $comment = mysqli_real_escape_string(db::$mysqli,$_POST['comment']);
        $appointid = $_POST['checkout'];
        $sql = "UPDATE sits_tbl SET endTime = '$time', sitDate = '$date', comment = '$comment' WHERE appointment_ID = '$appointid'";

        $result = db::query($sql);

        if($result)
        {
            popup("Updated", "/dashboard.php");
        }
        else
        {
            popup("Failed", "/dashboard.php");
        }

    }
}