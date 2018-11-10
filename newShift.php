<!DOCTYPE html>
<html lang="en">
<?php include("include/header.php");
include("adminNav.php");?>

<body>
<script>
    // initaliize jQuery
    $(document).ready(function(){
        $('.modal').modal();
        $('select').formSelect();
        $('.datepicker').datepicker();

    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems);
    });




</script>

<div class="container z-depth-5" id="dash" >
    <h1>Add a new shift</h1>
        <div id = "shift-details" class= "center-block">
                <!-- Dropdown Triggers -->
                <select>
                    <option value="" disabled selected>Carer</option>
                    <option value="1"> Suzy Dent</option>
                    <option value="2"> Gareth the kid</option>
                    <option value="3"> Catfish Billy</option>
                    <option value="4"> Kanye West</option>
                    <option value="5"> Chris Haansen</option>
                    <label>Carer</label>
                </select>
                <select>
                    <option value="" disabled selected>Client</option>
                    <li><option value="1"> Our little petal</option></li>
                    <li><option value="2"> Dave</option></li>
                    <li><option value="3"> Katy Price</option></li>
                    <li><option value="4"> Predator</option></li>
                    <li><option value="5"> Fake Child</option></li>
                </select>

            <h5>Start Time:</h5>
                <input type="text" class="datepicker" setDefaultDate = True>
                <select>
                    <option4 value="" disabled selected>HH</option4>
                    <li><option value="01"> 12</option></li>
                    <li><option value="2"> 01</option></li>
                    <li><option value="3"> 02</option></li>
                    <li><option value="4"> 03</option></li>
                    <li><option value="5"> 04</option></li>
                    <li><option value="6"> 05</option></li>
                    <li><option value="7"> 06</option></li>
                    <li><option value="8"> 07</option></li>
                    <li><option value="9"> 08</option></li>
                    <li><option value="10"> 09</option></li>
                    <li><option value="11"> 10</option></li>
                    <li><option value="12"> 11</option></li>
                </select>
                <select>
                    <option value="" disabled selected>MM</option>
                    <li><option value="1"> 00</option></li>
                    <li><option value="2"> 15</option></li>
                    <li><option value="3"> 30</option></li>
                    <li><option value="4"> 45</option></li>
                </select>
            <br>
            <div class="switch">
                <label>
                    AM
                    <input type="checkbox">
                    <span class="lever"></span>
                    PM
                </label>
            </div>

            <h5>End Time:</h5>

            <input type="text" class="datepicker" setDefaultDate = True>
            <select>
                <option value="" disabled selected>HH</option>
                <li><option value="01"> 12</option></li>
                <li><option value="2"> 01</option></li>
                <li><option value="3"> 02</option></li>
                <li><option value="4"> 03</option></li>
                <li><option value="5"> 04</option></li>
                <li><option value="6"> 05</option></li>
                <li><option value="7"> 06</option></li>
                <li><option value="8"> 07</option></li>
                <li><option value="9"> 08</option></li>
                <li><option value="10"> 09</option></li>
                <li><option value="11"> 10</option></li>
                <li><option value="12"> 11</option></li>
            </select>
            <select>
                <option value="" disabled selected>MM</option>
                <li><option value="1"> 00</option></li>
                <li><option value="2"> 15</option></li>
                <li><option value="3"> 30</option></li>
                <li><option value="4"> 45</option></li>
            </select>
            <div class="switch">
                <label>
                    AM
                    <input type="checkbox">
                    <span class="lever"></span>
                    PM
                </label>
            </div>
            <br>
            <br>
            <button class="btn waves-effect waves-light" type="submit" name="add-shift">Add Shift
                <i class="material-icons right">send</i>
            </button> <br><br>
        </div>

    </div>
</div>

</body>
</html>