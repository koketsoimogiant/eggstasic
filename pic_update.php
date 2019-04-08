<?php
include 'session.php';

$pic_name = $pic_owner = "";

# if the register button is clicked
if (isset($_GET['pic_name']) && isset($session_userid)){

    # prepare and bind
    $stmt = $conn->prepare("CALL update_pic(?, ?)");
    $stmt->bind_param("ss", $pic_name, $pic_owner);

    # set parameters and execute
    $pic_name = mysqli_real_escape_string($conn, $_GET['pic_name']);
    $pic_owner = mysqli_real_escape_string($conn, $session_userid);
    $stmt->execute();
    echo "A new document record created successfully";
    header("location: admin.php?set&name=$pic_name&owner=$pic_owner");

    $stmt->close();
}
else
{
    //header("location: admin.php?fail");
    echo "Problem area: ".$session_userid." ".$pic_name;
}

$conn-> close();
?>