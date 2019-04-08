<?php
include 'session.php';

$roomnumber = $quantity = $address = $extranote  = "";

$res = $_GET['res'];

# if the register button is clicked
if (isset($_POST['submit']) && (isset($_POST['roomnumber']) && isset($_POST['quantity']))){

    # prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders(customer, roomnumber, num_trays, address, extranote, residence) VALUES(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $session_userid, $roomnumber, $quantity, $address, $extranote, $res);

    # set parameters and execute
    $roomnumber = mysqli_real_escape_string($conn, $_POST['roomnumber']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $extranote = mysqli_real_escape_string($conn, $_POST['extranote']);

    $stmt->execute();
    //echo "New records created successfully";
    header("location: make_an_order.php?set");
    echo "Res is: ".$res."\n";
    echo "Room no. is: ".$roomnumber;
    echo "Quantity is: ".$quantity;
    echo "Address is: ".$address;
    echo "Extra Note is: ".$extranote;

    $stmt->close();
}
else
{
    header("location: make_an_order.php?fe");
    //echo "Exception handling needed in add order script.";
}

$conn-> close();
?>