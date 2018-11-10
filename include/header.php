<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 8:38 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head xmlns:height="http://www.w3.org/1999/xhtml">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/mystyle.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="css/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </head>
    <!-- open the body tag in adminNav.php as we need to apply a class to it. -->
<body class="hide-sidedrawer">

<div class="watermark"><img src="images/watermark.png" height="100px" /></div>
<?php
error_reporting(0);
session_start();
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/functions.php');
include_once ($_SERVER['DOCUMENT_ROOT'] . '/include/config.php');
if(adminCheck($_SESSION['email'])) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/adminNav.php');
}
else
{
    if(isset($_SESSION['email'])) {
        include_once($_SERVER['DOCUMENT_ROOT'] . '/nav.php');
    }
}