<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="css/mystyle.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<img class="responsive-img" src="images/logo.jpeg" id="logo">

<div class="container z-depth-5" id="login">
    <div class="row">
        <form class ="col s12" >
            <div class="row">
                <div class="input-field col s10" style="margin-top:10%">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label class="active" for="icon_prefix">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10">
                    <i class="material-icons prefix">lock_outline</i>
                    <input id="icon_password" type="text" class="validate">
                    <label class="active" style="padding-left:5%;" for="icon_password">Password</label>
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
</body>

</html>