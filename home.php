<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/10/2018
 * Time: 8:05 AM
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
        $payrollid = $_POST['home'];
        $comment = $_POST['comment'];
        $sql = "SELECT staffHome_ID FROM staff_home_link_tbl WHERE staff_home_link_tbl.payroll_ID = '$payrollid'";
        $result = db::query($sql);
        $row = mysqli_fetch_assoc($result);
        $staffhomeid = $row['staffHome_ID'];
        $sql = "UPDATE staff_home_tbl SET homeTransportTime = '$time', homeTransportDate = '$date', comment='$comment' WHERE Staff_Home_ID = '$staffhomeid' ";

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