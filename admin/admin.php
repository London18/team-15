<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 8:41 PM
 */
include_once "../include/header.php";

//if(user::getAccessLevel($_SESSION['email']) >= 90 && $_POST['session'] == user::getSessionID($_SESSION['email'])) {

    echo '<a href="adduser.php">Add User</a>';
//}
//else
//{
//    popup("NO ACCESS, Please login", "processlogin.php");//
//}

include_once "../include/footer.php";

?>
