<?php
    include 'session.php';
    $res = $_GET['res'];
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
    	<h3>Manage Orders</h3>
    </div>
    <div class="well well-lg" id="instruct">
    	<p style="text-align: center;">There are three things you can do to the orders here... Approve, change status and complete an order.</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
                $sql = "SELECT * FROM orders INNER JOIN residence ON orders.residence = residence.id INNER JOIN user on orders.customer = user.id WHERE residence = ".$res;    // Refactor this database table to singular form.

                $result = $conn -> query($sql);

                $count = $result -> num_rows;

                if ($count > 0) {
                    while ($row = $result->fetch_assoc()) {
                    	echo '
                            <div class="col-sm-4 text-center">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3>'.$row['firstname'].' '.$row['surname'].'</h3>
                                    </div>
                                    <div class="panel-body">
                                        <span id="panel"><b>'.$row['res_name'].'</b></span>
                                        <span id="panel"><p>'.$row['num_trays'].' trays of eggs</p></span>
                                        <span id="panel"><p>to room: '.$row['roomnumber'].'</p></span>
                                        <span id="panel"><p>address specification: '.$row['address'].'</p></span>
                                        <span id="panel"><p>An Extra Note: '.$row['extranote'].'</p></span>
                                        <span id="panel"><p>
                                            <select name="action" class="btn btn-lg btn-default">
                                                <option value="">Perform action</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="onitsway">Is on it\'s way</option>
                                            </select>
                                        </p></span>
                                    </div>
                                </div>
                            </div> <!-- Column closing tag -->
                            ';
                    }
                }
            ?>
        </div> <!-- Row closing tag -->

        <button class="btn btn-default" onclick="document.location.href='make_an_order.php'">Back</button>
    </div> <!-- Container closing tag -->
    <div class="modal-footer">
        <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
    </div>
</body>
</html>