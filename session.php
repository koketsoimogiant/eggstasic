<?php
include('db_config.php');
session_start();

$user_check = $_SESSION['login_user'];

$results = mysqli_query($conn,"select * from user where user.username = '$user_check' ");

$row = mysqli_fetch_array($results,MYSQLI_ASSOC);

$session_userid = $row['id'];
$session_username = $row['username'];
$session_fname = $row['firstname'];
if ($row['middlename'] === "") {
	$session_mname = "Not set";
}else{
	$session_mname = $row['middlename'];
}
$session_surname = $row['surname'];
$session_idnum = $row['idnumber'];
$session_phone = $row['phone_number'];
$session_email = $row['email'];
$session_pro_pic = $row['profilepic'];
$session_usertype = $row['type'];
$user_admin = "21232f297a57a5a743894a0e4a801fc3";
$user_client = "62608e08adc29a8d6dbc9754e659f125";

if(!isset($_SESSION['login_user'])){
    header("location:login.php");
}
?>