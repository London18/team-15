<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/header.php');
?>

<script>
    // initaliize jQuery
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>
<div class="container z-depth-5" id="dash">
    <h1 id="demo"></h1>
        <?php
        session_start();
        $db = new db();
        $payrollid =  $_SESSION['payrollid'];
        $sql = "SELECT sits_link_tbl.sit_ID, sits_link_tbl.payroll_ID FROM sits_link_tbl WHERE sits_link_tbl.payroll_ID = '$payrollid'";
        $rows = db::query($sql);
        foreach ($rows as $row)
        {
            $sitid = $row['sit_ID'];

            $sql = "SELECT sits_tbl.appointment_ID FROM sits_tbl WHERE sits_tbl.sit_ID = '$sitid'";
            $result = db::query($sql);
            $row2 = mysqli_fetch_assoc($result);
            $appointID = $row2['appointment_ID'];


            $prechecksql = "SELECT * FROM sits_tbl WHERE appointment_ID = '$appointID'";
            $preresult = db::query($prechecksql);
            $prerow = mysqli_fetch_assoc($preresult);


            $sqlhome = "SELECT staffHome_ID FROM staff_home_link_tbl WHERE staff_home_link_tbl.payroll_ID = '$payrollid'";
            $resulthome = db::query($sqlhome);
            $rowhome = mysqli_fetch_assoc($resulthome);
            $staffhomeid = $rowhome['staffHome_ID'];
            $homecheck = "SELECT * FROM staff_home_tbl WHERE Staff_Home_ID = '$staffhomeid'";
            $homeresult = db::query($homecheck);
            $homerow = mysqli_fetch_assoc($homeresult);


            $sql2 = "SELECT appointmentTime, appointmentDate, client_ID FROM appointments_tbl WHERE appointment_ID = '$appointID'";
            $result2 = db::query($sql2);
            $row3 = mysqli_fetch_assoc($result2);
            $clientid = $row3['client_ID'];
            $sql3 = "SELECT clientName, clientStreetAddress, clientPostCode FROM client_tbl WHERE client_tbl.client_ID = '$clientid' ";
            $result3 = db::query($sql3);
            $row4 = mysqli_fetch_assoc($result3);



        ?>
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?php echo $row3['appointmentTime'];  echo " " . $row3['appointmentDate']; ?></span>
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $row4['clientName']; ?></td>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th>Address</th>
                            <td><?php echo $row4['clientStreetAddress'] . ", " . $row4['clientPostCode'];  ?></td>
                        </tr>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger" onclick="openmodal(<?php echo $appointID; ?>)" <?php if($prerow['sitDate'] != null) {echo "disabled";}?> href="#CheckOut">Check Out</a>
                    <a class="waves-effect waves-light btn modal-trigger" onclick="openhome(<?php echo $payrollid;?>)" <?php if(!is_null($homerow['homeTransportDate'])){echo "disabled";}?> href="#HomeSafe">Home Safe</a>
                </div>
            </div>
        </div>
       <?php }?>
            <div id="CheckOut" class="modal">
                <form action="checkout.php" method="post">
                    <div class="modal-content">

                        <h4>Check Out</h4>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name="comment" id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Comments</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" id="inner" name="checkout" value=""  class="waves-light waves-effect btn-large">Checkout</button>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="float: left">Cancel</a>

                    </div>
                </form>
            </div>

    <div id="HomeSafe" class="modal">
        <form action="home.php" method="post">
                <div class="modal-content">
                    <h4>Home Safe</h4>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                            <label for="icon_prefix2">Comments</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="agree" name="home" value=""  class="waves-light waves-effect btn-large">Agree</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat" style="float: left">Cancel</a>
                </div>
        </form>
            </div>
        </div>
    </div>
</div>
<script>


    function openmodal(id) {
        $("#inner").val(id);


    }
    function openhome(id) {
        $("#agree").val(id);

    }
    var d = new Date();
    var n = d.toLocaleDateString()
    document.getElementById("demo").innerHTML = n;
</script>