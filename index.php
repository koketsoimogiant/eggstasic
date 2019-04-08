<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 meta tags first; any content *after* these tags -->
	<title>Home | RR EGGS TASIC</title>
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		#author {
			float: right;
			font-style: italic;
			text-transform: small-caps;
			color: #363636;
		    background: #d8d8d8;
		    padding: 2px;
		    border-radius: 4px;
		}
		#alertlogos {
			text-align: center;
			background-color: #a88e9f;
		}
		header{
            color: black;
            display: block;
            text-align: center;
            }
            @media screen and (max-width: 600px){
    		ul.topnav li.right, 
    		ul.topnav li {float: none;}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
		<h1>RR EGGS TASIC</h1><hr>
		<button class="btn btn-success btn-lg" onclick="document.location.href='login.php'"><span class="glyphicon glyphicon-home"></span>My Profile</button>
		<button class="btn btn-primary btn-lg" onclick="document.location.href='faqs.php'"><span class="glyphicon glyphicon-user"></span> About us</button>
		<button class="btn btn-success btn-lg" onclick="document.location.href='faqs.php'"><span class="glyphicon glyphicon-question-sign"></span> FAQS</button>
		<button class="btn btn-danger btn-lg" onclick="document.location.href='faqs.php'"><span class="glyphicon glyphicon-envelope"></span> Contact us</button>
	</div>
	<div class="alert alert-danger text-center">
		<blockquote>
			"Hello this website is still underdevelopment and testing";
		</blockquote>
		<p>For any inquiries: please email developer@eggstasic.co.za</p>
	</div>
  <div class="container">
	<div id="alertlogos" class="alert">
      <h4 style="color: white;">Companies involved currently...<hr></h4>
        <img src="imgs/IMG-20181119-WA0001.jpg" alt="EGGS TASIC Logo" height="200px" style="border-radius: 30px; box-shadow: 0 0 5px 5px grey;">
        &nbsp;
        <img src="imgs/IMG-20181119-WA0000.jpg" alt="EGGS TASIC Logo" height="150px" style="border-radius: 100%; box-shadow: 0 0 5px 5px grey">
     </div>
      <div class="page-header">
       <hr> <h1 style="text-align: center; font-style: bold; color: black;">Our Mission, Vision, and Objectives</h1>
    </div>

      <div class="alert alert-info text-cente">
        <h4 style="font-style: italic;"><br><b>Our MISSION</b></h4><br>
        <b>O</b>ur mission is to make convenience and affordability a priiority to our target market, thus saving them time, energy, and money.
        <ul style="list-style-type:circle"><br>
          <li><b><u>Convenience</u></b>: EGGS TASIC will be based on camps for easy access to all students who are not staying in the targerted University Residences and this is a hge number. We will also be based in each University Residences for easy access.</li><br>
          <li><b><u>Affordability</u></b>: EGGS TASIC understands the budget constraints of students and therefore will go out of its way to ensure that our prices are not just compatible but are of good quaity and below retail price which will give us the cutting edge in our journey to market dominance.</li>
      </ul><hr>
        <h4 style="font-style: italic;"><br><b>Our OBJECTIVES</b></h4><br>
        <ul style="list-style-type:circle">
          <li>To supply each student in Institutions of Higher Learning with quality and affordable fresh table eggs by October 2020.</li><br>
          <li>To take over the supply of eggs to small businesses that are using eggs as thier main ingredient, like Kota shop businesses in the local communities.</li><br>
          <li>To enter into partnership with Planting Thoughts Pty LTd on thier journey to developing enterpreneurs which will be a direct benefit to our mission of being the supplier and distributor of choice.</li><hr>
        </ul>
        <h4 style="font-style: italic;"><br><b>Our VISION</b></h4><br>
        <ul style="list-style-type:circle">
          <li>To establish RR EGSTASIC as the number one EGG supplier and distributor of quality anf affordable table eggs of choice in the Institution of higher learning by October 2020.</li><br><br>
        </ul><hr>
        <h4 style="font-style: italic;"><br><b>Our CLIENTELE</b></h4><br>
        <ul style="list-style-type:circle">
          <li>The Residences are the heartbeat of student life on the North West University Vaal Triangle Campus. Egg-cellent's target is both On-Campus and Off-Campuss Residences. 98% of Residence students are NSFAS or bursary recicpients, therefore the majority will be Fundi card holders</li><br><br>
        </ul><hr>
        <h4 style="font-style: italic;"><br><b>Our ESTIMATED TARGET MARKET of On-Campus students</b></h4><br>
        <blockquote style="font-size: 15px;">There are 4 On-Campus residences namely, Jasmyn, Veries, Horizon, and Suntrust Residence.</blockquote>
        <ul style="list-style-type:circle">
          <li>Estimation is conducted from Thuthuka Residence and is as follows:</li>
          <li>3 Single rooms per unit *6 units per block = <b>12 students per block</b>.</li>
          <li>17 blocks in Thuthuka (block A - Q) thus 12 students per block * 17 blocks = <b>204 students</b>.</li>
          <li>To calculate the average on-campus students: 204 * 4(Other On-Campus residence) <br>= <b> 816 On-Campus students.</li></b>
          <br><br>
        </ul>
        <hr><h4 style="font-style: italic;"><br><b>Our ESTIMATED TARGET MARKET of Off-Campus students</b></h4><br>
        <ul style="list-style-type:circle">
          <blockquote style="font-size: 15px;">There are 6 Off-Campus residences namely, Bohlale Village, Moahi Village, Longfellow Village, Ebukhosini Village, Faranani, and Santrust Residence.</blockquote>
          <li>Estimation is conducted from Ebukhosini Residence and is as follows:</li>
          <li>3 Double rooms per unit = <b>6 students per unit</b>.</li>
          <li>10 units per block * 6 students per unit = <b>60 students</b>.</li>
          <li>4 blocks * 60 students = <b>240 students</b>.</li>
          <li>To calculate the average off-campus students: 204 * 5(Other Off-Campus residence) = <b><br>1 200 Off-Campus students.</b></li>
          <br><br>
        </ul>
        <hr><h4 style="font-style: italic;"><br><b>Therefore, our Estimated clientele is: 816 On-Campus students * 1 200 Off-Campus students = 2 016 students.</b></h4><br>
    </div>

    <div class="page-header">
        <h1 style="text-align: center; font-style: bold; color: black;">Notification Panel</h1>
    </div>
	<div class="well well-sm">
		<div class="page-header text-center">
			<p style="text-align: center; ">*****Your panel for reading Announcements/Promotions*****</p><br>
		</div><br>
			<?php
				$sql = "SELECT * FROM announcement INNER JOIN user ON user.id=announcement.id ORDER BY date_time;";
				$result = $conn -> query($sql);

				while ($row = $result->fetch_assoc()) {
					$id = $row['id'];
					echo "<div class='alert alert-info alert-dismissable fade in'>".
                          "<p>".$row['announcement']."</p><br/>".
                          "<p>".$row['date_time']."</p>".
                          "<p id='author'>".$row['firstname']." ".$row['surname']."</p>".
                          '</div>';
				}
			?>
	</div>
  </div>
	<hr style="color: black;">
	<header style="font-style: italic;color: black;
		    ">Customer Enquiries/Comments</header>
	<div class="alert alert-danger text-center" style="margin: 10px; padding: 15px;">
        <form name="form1" method="POST" action="addenquiry.php">
            <legend style="padding-top: 15px; padding-bottom: 15px;">Please leave your Enquiries here:</legend><hr>
            <div class="one_col">
            <label style="color: black; padding-top: 5px; padding-bottom: 5px;" >Email Address:</label><br>
            <input type="text" name="email" placeholder="Please enter your email address below" required style="width: 75%; padding-right: 15px; padding-left: 15px;  padding-top: 15px; padding-bottom: 15px;">
            <span class="error"></span>
            </div>
        <br>
        <div class="one_col">
            <label style="color: black;padding-top: 5px; padding-bottom: 5px;" >Enquiry Title (comment or enquiry):</label><br>
            <input type="text" name="title" placeholder="Please enter your comment or enquiry title below" required style="width: 75%; padding-right: 15px; padding-left: 15px; padding-top: 15px; padding-bottom: 15px;">
            <span class="error"></span>
            </div>
        <br>
        <div class="one_col">
            <label style="color: black;padding-top: 5px; padding-bottom: 5px;">Enquiry:</label><br>
            <textarea rows="5" cols="35" name="enquiry" placeholder="Please enter your enquiry below" required style="padding-right: 15px; padding-left: 15px;  padding-top: 15px; padding-bottom: 15px;"></textarea>
            <span class="error"></span>
        </div>
        <br>
        <div class="one_col">
            <button class="btn btn-lg label-danger" style="color: white;" name="submit" onclick="Letter(document.form1.title)">Submit</button>
        </div>
        </form>
    </div>
<div class="modal-footer">
    <h5>RR EGGS TASIC &copy; Copyright 2018, All rights reserved</h5>
</div>

<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="jquery-3.2.1.min.js"></script>
<script src="local-jquery.js"></script>
<script src="Letter.js"> </script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>