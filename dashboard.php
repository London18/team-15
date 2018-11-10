<!DOCTYPE html>
<html lang="en">
<?php include("header.php");
include("adminNav.php");?>
<body>


<script>
// initaliize jQuery

$(document).ready(function(){
$('.modal').modal();
});
</script>

<div class="container z-depth-5" id="dash">
    <h1 id="demo"></h1>
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">15:00-16:00 10/11/18</span>
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <td>Bob Skaggs</td>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th>Address</th>
                            <td>15 Bank Street</td>
                        </tr>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <!-- Modal Triggers -->

                    <a class="waves-effect waves-light btn modal-trigger" href="#CheckOut">CheckOut</a>
                    <a class="waves-effect waves-light btn modal-trigger" href="#HomeSafe">Home Safe</a>

                    <div id="CheckOut" class="modal">
                        <div class="modal-content">
                            <h4>Check out</h4>
                            <p>please add buttons kanya</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>


                    <div id="HomeSafe" class="modal">
                        <div class="modal-content">
                            <h4>Home Safe</h4>
                            <p>please add buttons kanye</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var d = new Date();
    var n = d.toLocaleDateString()
    document.getElementById("demo").innerHTML = n;
</script>
</body>
</html>