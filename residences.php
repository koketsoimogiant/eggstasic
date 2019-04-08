<?php
	include 'session.php';

    if (isset($_GET['set'])) {
        echo "<div class='btn alert-success alert-dismissable fade in' style='width: 100%; z-index: 1; position: fixed; background-color: rgba(50, 255, 50, 0.5); top: 1em;'>" .
                "<span class='glyphicon glyphicon-warning'></span>" .
          "<a href='residences.php' class='close'  aria-label='close'>&times;</a>" .
          "<p><b>Great</b>, your changes have been successfully Saved.</p>" .
          "</div>";
    }

    $sql = "SELECT * FROM residence;";

    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->
    <title>Add/Remove Res | RR EGGS TASIC</title>

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

        input[type=text], select {
            min-width: 100%;
            margin: 5px;
            text-align: center;
            border: none;
            border-bottom: 2px solid goldenrod;
        }

        .tbl {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>RR EGGS TASIC</h1>
        <p>The only place to get your quality eggs</p>
        <button class="btn btn-success" style="position: absolute; right: 15px;" onclick="document.location.href='admin.php'"><span class="glyphicon glyphicon-user"></span> My Profile</button>
    </div>
.    <div class="page-header text-center">
    	<h1>Add or Remove Residences/usual areas</h1>
    </div>
    <div class="container">
    	<?php if (!isset($_GET['id'])) { ?>
            <form method="POST" action="handleRes.php">
                Name of Residence:<br> <input type="text" name="nameOfRes1" required title="Name or Res to Add or Remove" placeholder="'Faranani Residence'" autofocus><br>
                Location of Residence:<br> <input type="text" name="res_location" required title="location of your Residence" placeholder="33 Faraday rd, Vanderbijlpark"><br>
                Type of Residence:<br> <input type="text" name="res_type" required title="The type of your Residence" placeholder="On-Campus Residence"><br>
                Color of Residence:<br> <!-- <input type="text" name="color" required title="What color do you wanna make this box" placeholder="primary"> -->
                <select name="color" required align="center">
                    <option value="primary"><span class="label label-primary">Blue</span></option>
                    <option value="info"><span class="label label-info">Lightblue</span></option>
                    <option value="success"><span class="label label-success">Green</span></option>
                    <option value="warning"><span class="label label-warning">Orange</span></option>
                    <option value="danger"><span class="label label-danger">Red</span></option>
                </select>
                <br>
                <input type="submit" value="Add New Residence" class="btn btn-primary" name="submit">
                <input type="button" value="Back to Admin" class="btn btn-default" onclick="document.location.href='admin.php'">
            </form>
        <?php
            }else {
                $daSql = "SELECT * FROM residence WHERE id=".$_GET['id'];
                $daResult = $conn -> query($daSql);
                echo "results: ".$daResult->num_rows;
                if ($daResult->num_rows > 0) {
                    if ($daRow = $daResult -> fetch_assoc()) {
                        echo '
                            <form method="POST" action="handleRes.php?myid='.$_GET['id'].'">
                                Name of Residence:<br>
                                <input type="text" name="nameOfRes2" required value="'.$daRow["res_name"].'" title="Name or Res to Add or Remove" placeholder="\'Faranani Residence\'"  autofocus><br>
                                Location of Residence:<br>
                                <input type="text" name="res_location" required value="'.$daRow["res_location"].'" title="location of your Residence" placeholder="33 Faraday rd, Vanderbijlpark"><br>
                                Type of Residence:<br>
                                <input type="text" name="res_type" required value="'.$daRow["res_type"].'" title="The type of your Residence" placeholder="On-Campus Residence"><br>
                                Color of Residence Option:<br>
                                <input type="text" name="color" required value="'.$daRow["color"].'" title="What color do you wanna make this box" placeholder="Choose Your Color"><br>
                                <input type="submit" value="Update Residence" class="btn btn-success" name="submit">
                                <input type="button" value="New Residence" class="btn btn-primary" onclick="document.location.href=\'residences.php\'">
                                <input type="button" value="Back to Admin" class="btn btn-default" onclick="document.location.href=\'admin.php\'">
                            </form>
                        ';
                    }
                }else{
                    header("Location: residences.php?fail");
                }
            }
        ?>
    </div>
    <br>
    <div class="container table-responsive tbl">
        <table class="table table-condensed table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td>Name of Residence</td><td>Number of orders associated</td><td>Location of Residence</td><td>Color of Option</td><td>Type of Residence</td><td>ACTIONS</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                        # code...
                        $id = $row['id'];
                        echo '
                        <tr><td>'.
                            $row['res_name'].'</td><td>'.
                            $row['res_orders'].'</td><td>'.
                            $row['res_location'].'</td><td>'.
                            $row['res_type'].'</td><td>'.
                            $row['color'].'</td>

                            <td><a class="btn label-danger" href="handleRes.php?id='.$id.'"><span class="glyphicon glyphicon-remove"></span> delete</a>&nbsp;<a class="btn label-primary" href="residences.php?id='.$id.'"><span class="glyphicon glyphicon-edit"></span> update</a>
                            </td>
                        </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
    </div>
</body>
</html>