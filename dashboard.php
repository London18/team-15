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
    <h1 id="date"></h1>
    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey darken-1" id="dashcard">
                <div class="card-content white-text">
                    <span class="card-title">15:00-16:00 </span>
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

                    <a class="waves-effect waves-light btn modal-trigger" href="#CheckOut">Check Out</a>
                    <a class="waves-effect waves-light btn modal-trigger" href="#HomeSafe">Home Safe</a>

                    <div id="CheckOut" class="modal">
                        <div class="modal-content">
                            <h4>If you did overtime please imput it below along with the reason why:</h4>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="timepicker">Finish Time</label>
                                    <input type="time" name="time">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="font-size: 40px; color: deepskyblue;">Agree</a>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="font-size: 40px; color:red;">Cancel</a>

                        </div>
                    </div>


                    <div id="HomeSafe" class="modal">
                        <div class="modal-content">
                            <h4>If you did overtime please imput it below along with the reason why:</h4>
                            <label for="timepicker">Finish Time</label>
                            <input type="time" name="time">
                        </div>
                        <div class="modal-footer">

                            <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="font-size: 40px; color: deepskyblue;">Agree</a>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="font-size: 40px; color:red;">Cancel</a>

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
    document.getElementById("date").innerHTML = n;
</script>
</body>
</html>