<?php
include 'session.php';

$privileges = $session_usertype;
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->
    <title>My Profile | RR EGGS TASIC</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="imgs/favicon.png">

    <style type="text/css">
        body{
            color: white;
            background-image: url("imgs/logo/bg.jpg");
            /*background-position: center;*/
            background-attachment: fixed;
            background-size: 100%;
            /*background-blend-mode: difference;*/
        }

        .block {
            height: 7em;
            width: 7em;
            margin: 1em;
            text-align: center;
            border-radius: 100%;
        }

        .block:hover {
            filter: alpha(80);
            opacity: 0.8;
        }

        .block:visited {
            filter: alpha(95);
            opacity: 0.95;
        }

        #container {
            height: auto;
            width: auto;
            background: rgba(0,0,0,0.3);
            margin: 0 auto;
            border: 1px groove white;
            border-radius: 5px;
            box-shadow: 0 0 5px 5px grey;
        }

        .data {
            color: gold;
        }

        a {
            text-decoration: none;
            color: gold;
        }

        b {
            font-size: 30;
        }

        .user-info{
            border: 1px solid silver;
            /*-webkit-box-shadow: 0 0 9px 9px silver inset;
            -moz-box-shadow: 0 0 9px 9px silver inset;
            box-shadow: 0 0 9px 9px silver inset;*/
            max-width: 70%;
            margin: 3em auto;
            padding: 3em 10px;
            text-align: center;
            background-color: rgba(0,0,0,0.7);
        }

        img{
            border-radius: 100%;
            border: solid 10px white;
            position: absolute;
            top: 150px;
            background-color: #252525;
        }

        .changer {
            position: absolute;
            top: 250px;
            width: 200px;
            height: 100px;
            background-color: transparent;
            border-bottom-left-radius: 100px;
            border-bottom-right-radius: 100px;
            outline: none;
            color: transparent;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>RR EGGS TASIC</h1>
        <p>The only place to get your quality eggs</p>
        <?php if ($privileges === '21232f297a57a5a743894a0e4a801fc3') {  // extended privileges
            # code...
            echo "<b>Administrator</b>";
        } else {
            # code...
            echo "<b>Client Profile</b>";
        } ?>
    </div>

	<div id="container">
        <img src="imgs/profile/<?php echo $session_pro_pic; ?>" alt="Profile Picture" width="200px" height="200px">
        <button class="btn changer" onclick="document.location.href='addpic.php'">Change Profile Picture</button>

        <div class="user-info">
            <h1 style="text-align: center;">Welcome To Your Eggs Tasic Profile</h1>
            <pre style="text-align: center;">you have certain abilities in here enjoy the power</pre>
            <?php
                echo
                '<div>' .
                    '<h1>User:<span class="data"> '.$session_username.'</span></h1><hr>' .
                    '<p>First Name:<span class="data"> '.$session_fname.'</span></p><hr>' .
                    '<p>Middle Name:<span class="data"> '.$session_mname.'</span></p><hr>'.
                    '<p>Surname:<span class="data"> '.$session_surname.'</span></p><hr>' .
                    '<p>ID Number:<span class="data"> '.$session_idnum.'</span></p><hr>' .
                    '<p>Phone Number:<span class="data"> '.$session_phone.'</span></p><hr>' .
                    '<p>Email Address:<span class="data"> '.$session_email.'</span></p><hr>' .
                    '</div>';

            if(!isset($_SESSION['login_user'])){
                header("location:login.php");
            }
            ?>
            <a style="border: 1px solid; padding: 3px 20px 3px 20px;" href="update.php" title="Update your details">Edit</a>
        </div><br/><br/>
        <hr>
        <div well alert-success well-lg style="background-color: #242424; text-align: center;">
            <?php if ($session_usertype === '21232f297a57a5a743894a0e4a801fc3'): ?>

            <button class="btn btn-warning block" onclick="document.location.href='make_an_order.php'">Check <br>orders</button>
            <button class="btn btn-default block" onclick="document.location.href='track.php'">Track <br>orders</button>
            <button class="btn btn-primary block" onclick="document.location.href='residences.php'">Add/delete<br>Residences</button>
            <button class="btn btn-success block" onclick="document.location.href='users.php'">Manage<br>Users</button>
            <button class="btn btn-info block" onclick="document.location.href='announcement.php'">Anounce<br>promos</button>
            <button class="btn btn-danger block" onclick="document.location.href='logout.php'">logout</button>

            <?php endif ?>

            <?php if ($session_usertype === $user_client): ?>

            <button class="btn btn-warning block" onclick="document.location.href='make_an_order.php'">Order Now</button>
            <button class="btn btn-default block" onclick="document.location.href='track.php'">Track my<br>orders</button>
            <button class="btn btn-danger block" onclick="document.location.href='logout.php'">logout</button>

            <?php endif ?>
        </div>
        <hr>
        <div id="footer" style="font-size: x-large; clear: both; position:relative; bottom: 0; padding: 0 10px;">
            <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".changer").mouseenter(function(){
                $(".changer").css("background-color","rgba(0,0,0,0.5)");
                $(".changer").css("color","white");
            });
            $(".changer").mouseleave(function(){
                $(".changer").css("background-color","Transparent");
                $(".changer").css("color","Transparent");
            });
        });
    </script>
</body>
</html>
