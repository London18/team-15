<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/include/header.php');
?>

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
                    <a href="#">Check Out</a>
                    <a href="#">Home Safe</a>
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