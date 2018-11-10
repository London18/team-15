<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 11:21 PM
 */
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/header.php');
if(isset($_SESSION['email']))
{
    pageReturn("/dash.php");
    die();
}

?>

<img class="responsive-img" src="images/logo.jpeg" id="logo">

<div class="container z-depth-5" id="login">
    <div class="row">
        <form class ="col s12" action="processlogin.php" method="post" >
            <div class="row">
                <div class="input-field col s10" style="margin-top:10%">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="email">
                    <label for="icon_prefix">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="icon_password" type="password" class="validate" name="password">
                    <label for="icon_password">Password</label>
                </div>
            </div>
            <div class="row">
                <button style="width:100%; height:50px; font-size: 20px;" class="btn waves-effect waves-light" type="submit" name="action">Login
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>

    </div>


</div>

<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/footer.php');