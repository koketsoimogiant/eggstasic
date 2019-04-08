<?php
require 'session.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];

    if (!isset($_GET['id'])){
        echo '<br>:Error: action cannot be performed: failed to identify database table row.';
    }else{
        $sql2 = "DELETE FROM announcement WHERE id = ".$id.";";

        if ($conn->query($sql2) == TRUE) {
            echo "New record deleted successfully";
            header("Location: announcement.php");
        } else {
            echo "Error: " . $sql2 . "<br>" . $con->error;
        }
    }
}
//if(!isset($_SESSION['login_user'])){
//    header("location:".$from.".php");
//}
$con->close();
?>
