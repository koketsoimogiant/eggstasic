<?php
    include 'session.php';
    if (isset($_GET['res'])) {
        $res = $_GET['res'];
    }
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
    <link rel="icon" type="image/png" href="imgs/favicon.png">
    <style type="text/css">
        td > a {
            color: white;
            font-weight: bolder;
            font-size: 20px;
        }

        input[type=text], input[type=number] {
            min-width: 100%;
            margin: 5px;
            text-align: center;
            border: none;
            border-bottom: 2px solid goldenrod;
        }

        .tbl {
            overflow-x: auto;
        }

        #instruct {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>RR EGGS TASIC</h1>
        <p>The only place to get your quality eggs</p>
    </div>
    <div class="page-header text-center">
    	<h1>Place your orders for <?php echo $res; ?></h1>
    </div>
    <div class="well well-lg" id="instruct">
    	<p style="text-align: center;">This is how this ordering system works... you make an order we call you to verify your identity and then we deliver and you pay.</p>
    </div>
    <div class="well well-lg container">
        <div class="row">
            <div class="btn col-sm-3" id="1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h5>5 half Dozens</h5></center>
                    </div>
                    <div class="panel-body">
                        <img src="imgs/logo/bg2.jpg" width="100%" height="100%">
                    </div>
                    <div class="panel-footer">
                        <p>30 Eggs</p>
                    </div>
                </div>
            </div> <!-- Column closing tag -->
            <div class="btn col-sm-3" id="2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h5>5 Dozens</h5></center>
                    </div>
                    <div class="panel-body">
                        <img src="imgs/logo/bg1.jpg" width="100%" height="100%">
                    </div>
                    <div class="panel-footer">
                        <p>60 Eggs</p>
                    </div>
                </div>
            </div> <!-- Column closing tag -->
            <div class="btn col-sm-3" id="3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h5>5 Dozens & 5 half Dozens</h5></center>
                    </div>
                    <div class="panel-body">
                        <img src="imgs/logo/eggs.jpg" width="100%" height="100%">
                    </div>
                    <div class="panel-footer">
                        <p>90 Eggs</p>
                    </div>
                </div>
            </div> <!-- Column closing tag -->
            <div class="btn col-sm-3" id="4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <center><h5>10 Dozens</h5></center>
                    </div>
                    <div class="panel-body">
                        <img src="imgs/logo/eggs1.jpg" width="100%" height="100%">
                    </div>
                    <div class="panel-footer">
                        <p>120 Eggs</p>
                    </div>
                </div>
            </div> <!-- Column closing tag -->
        </div>
    </div>
    <div class="container">
        <div class="well well-lg">
            <form method="POST" action="addorder.php?res=<?php echo $res; ?>">
                Room Number:<br> <input type="text" name="roomnumber" required title="include the building number if possible" placeholder="e.g. 'GA - G08'"><br>
                Number of Trays:<br> <input id="num" type="number" name="quantity" min="1" required title="Number of trays you want to order" placeholder="e.g. '4'"><br>
                Any Address Specification:<br> <input type="text" name="address" required title="Are there any specification you wanna add to the chosen location?" placeholder="e.g. 'just the deliver at NWU's bus Gate'"><br>
                Extra note:<br> <input type="text" name="extranote" title="Is there anything you want to add or specify" placeholder="e.g. 'Please deliver before 12pm today coz I'm leaving for home after"><br>
                <input type="submit" value="Submit your order" class="btn btn-primary" name="submit">
                <input type="button" value="Back" class="btn btn-default" onclick="document.location.href='make_an_order.php'">
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
    </div>
    <script>
        $(document).ready(function(){
            $("#1").click(function() {
                $("#num").val('1');
            });
            $("#2").click(function() {
                $("#num").val('2');
            });
            $("#3").click(function() {
                $("#num").val('3');
            });
            $("#4").click(function() {
                $("#num").val('4');
            });
        });
    </script>
</body>
</html>
