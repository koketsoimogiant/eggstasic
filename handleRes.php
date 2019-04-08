<?php

include 'session.php';


// ======================================== Add Res ==============================================
if (isset($_POST['nameOfRes1']) && isset($_POST['submit'])) {

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_errno());
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO residence (res_name, res_location, res_type, color) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $res_name, $res_location, $res_type, $color);

    // set parameters and execute
    $res_name = $_POST['nameOfRes1'];
    $res_location = $_POST['res_location'];
    $res_type = $_POST['res_type'];
    $color = $_POST['color'];
    $stmt->execute();

    echo "New records created successfully";
    header("location:residences.php?set");

    $stmt->close();
}
else{
    echo "Something went wrong here, type something in the textarea please.";
}
// ===================================== End of add res =============================================

// ======================================== Delete Res ==============================================
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (!isset($_GET['id'])){
        echo '<br>:Error: action cannot be performed: failed to identify database table row.';
    }else{
        $sql2 = "DELETE FROM residence WHERE id = ".$id.";";

        if ($conn->query($sql2) == true) {
            echo "New record deleted successfully";
            header("Location: residences.php");
        } else {
            echo "Error: " . $sql2 . "<br>" . $con->error;
        }
    }
}
// ===================================== End of Delete res ==========================================

// ======================================== Update the Res ==============================================
if (isset($_POST['nameOfRes2']) && isset($_POST['submit'])) {

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_errno());
    }

    $id = $_GET['myid'];

    // prepare and bind
    $stmt = $conn->prepare("UPDATE residence SET res_name=?, res_location=?, res_type=?, color=? WHERE id = ".$id);
    $stmt->bind_param("ssss", $res_name, $res_location, $res_type, $color);

    // set parameters and execute
    $res_name = $_POST['nameOfRes2'];
    $res_location = $_POST['res_location'];
    $res_type = $_POST['res_type'];
    $color = $_POST['color'];
    $stmt->execute();

    echo "New records updated successfully";
    header("location: residences.php?set");

    $stmt->close();
}
else{
    echo "Something went wrong here, type something in the textarea please.";
}
// ===================================== End of Update res =============================================

$conn->close();

?>