<?php
    include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->
	<title>Orders | RR EGGS TASIC</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        #instruct {
            text-align: center;
        }

        @media only screen (min-width: 650px){
            .col-sm-4{
                width: all;
            }

            .row {
                text-align: center;
            }

            #search-bar{
                border: none;
            }
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>RR EGGS TASIC</h1>
        <p>The only place to get your quality eggs</p>
        <button class="btn btn-success" style="position: absolute; right: 15px;" onclick="document.location.href='admin.php'"><span class="glyphicon glyphicon-user"></span> My Profile</button>
    </div>
    <div class="page-header text-center">
    	<h3>Choose your Place of Residence</h3>
    </div>
    <div class="well well-lg container" id="instruct">
    	<p style="text-align: center;">This is how the ordering system works... you make an order, we call you to verify your identity, we deliver and you pay.</p>
        <form method="POST">
            <input class="btn" id="search-bar" type="search" name="search" placeholder="Search Your Residence">
            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
        </form>
        <div class="row container">
            <!-- The following php section defines what happens when the form above is submitted... -->
            <?php

                if (isset($_POST['search'])) {
                    # code...
                    $query = $_POST['search'];

                    $sqls = 'SELECT * FROM residence WHERE res_name LIKE "%'.$query.'%";';
                    //echo "query = ".$query;  //this was for testing purposes for finding and handling exceptions

                    $results = $conn->query($sqls);

                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            if ($session_usertype === '21232f297a57a5a743894a0e4a801fc3') {
                                echo '
                                <div class="btn col-sm-4" onclick="document.location.href=\'order_manager.php?res='.$row['id'].'\'">
                                    <div class="panel panel-'.$row['color'].'">
                                        <div class="panel-heading">
                                            <h3>'.$row['res_name'].'</h3>
                                        </div>
                                        <div class="panel-body">
                                            <span id="panel"><b>'.$row['res_type'].'</b>
                                            <span id="panel"><p>Location: '.$row['res_location'].'</p>';
                                            if ($row['res_orders'] > 0) {
                                                echo 'Orders: <span style="color: blue;">'.$row['res_orders'].'<br/>  </span>';
                                            }else{
                                                echo 'Orders: <span style="color: red;">'.$row['res_orders'].'<br/>  </span>';
                                            }
                                        echo '</div>
                                    </div>
                                </div> <!-- Column closing tag -->
                                ';
                            }elseif ($session_usertype === '62608e08adc29a8d6dbc9754e659f125') {
                                echo '
                                <div class="btn col-sm-4" onclick="document.location.href=\'res_ordering.php?res='.$row['id'].'\'">
                                    <div class="panel panel-'.$row['color'].'">
                                        <div class="panel-heading">
                                            <h3>'.$row['res_name'].'</h3>
                                        </div>
                                        <div class="panel-body">
                                            <span id="panel"><b>'.$row['res_type'].'</b>
                                            <span id="panel"><p>Location: '.$row['res_location'].'</p>
                                        </div>
                                    </div>
                                </div> <!-- Column closing tag -->
                                ';
                            }
                        }
                    }else {
                        echo "No Residence of that kind found... Sorry";
                    }
                }
             ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                $sql = "SELECT * FROM residence ORDER BY res_name;";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($session_usertype === '21232f297a57a5a743894a0e4a801fc3') {
                            echo '
                            <div class="btn col-sm-4" onclick="document.location.href=\'order_manager.php?res='.$row['id'].'\'">
                                <div class="panel panel-'.$row['color'].'">
                                    <div class="panel-heading">
                                        <h3>'.$row['res_name'].'</h3>
                                    </div>
                                    <div class="panel-body">
                                        <span id="panel"><b>'.$row['res_type'].'</b>
                                        <span id="panel"><p>Location: '.$row['res_location'].'</p>';
                                        if ($row['res_orders'] > 0) {
                                            echo 'Orders: <span style="color: blue;">'.$row['res_orders'].'<br/>  </span>';
                                        }else{
                                            echo 'Orders: <span style="color: red;">'.$row['res_orders'].'<br/>  </span>';
                                        }
                                    echo '</div>
                                </div>
                            </div> <!-- Column closing tag -->
                            ';
                        }elseif ($session_usertype === '62608e08adc29a8d6dbc9754e659f125') {
                            echo '
                            <div class="btn col-sm-4" onclick="document.location.href=\'res_ordering.php?res='.$row['id'].'\'">
                                <div class="panel panel-'.$row['color'].'">
                                    <div class="panel-heading">
                                        <h3>'.$row['res_name'].'</h3>
                                    </div>
                                    <div class="panel-body">
                                        <span id="panel"><b>'.$row['res_type'].'</b>
                                        <span id="panel"><p>Location: '.$row['res_location'].'</p>
                                    </div>
                                </div>
                            </div> <!-- Column closing tag -->
                            ';
                        }
                    }
                }
            ?>
        </div> <!-- Row closing tag -->
        <button class="btn btn-default" onclick="document.location.href='admin.php'">Back</button>
    </div> <!-- Container closing tag -->
    <div class="modal-footer">
        <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
    </div>
</body>
</html>