<?php
/**
 * Created by PhpStorm.
 * User: rukia
 * Date: 11/9/2018
 * Time: 9:11 PM
 */
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Create a new user</h1>
            <div class="account-wall">
                <form id="register" class="form-signin" action = "processuser.php" method = "post">
                    <div class="block">
                        <input type="text" autocomplete="name" name = "name" class="form-control" placeholder="joe bloggs" required>
                    </div>
                    <div class="block">
                        <input type="text" autocomplete="email" name = "email" class="form-control" placeholder="example@email.com" required>
                    </div>
                    <div class="block">
                        <input id="password" autocomplete="new-password" type="password" name = "password" class="form-control" placeholder="Password" required><br>
                    </div>
                    <div class="block">
                        <input type="text" name = "address" class="form-control" placeholder="Address" required><br>
                    </div>
                    <div class="block">
                        <input type="text" name = "phone_home" class="form-control" placeholder="Home Phone" required><br>
                    </div>
                    <div class="block">
                        <input type="text" name = "phone_mobile" class="form-control" placeholder="Mobile Phone" required><br>
                    </div>
                    <div class="block">
                        <select name="accessLevel" size="1">
                            <option value="1">Registered User</Option>
                            <option value="90">Admin</Option>
                            <option value="100">SysAdmin</Option>
                        </select>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                </form>
                <br>
                <form action="admin.php">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Return to Dashboard</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/footer.php');
?>
