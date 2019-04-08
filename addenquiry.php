<?php
include 'session.php';

$email = $title = $enquiry = "";

# if the register button is clicked
if (isset($_POST['submit']))
{

    # prepare and bind
    $stmt = $conn->prepare("INSERT INTO enquiry(email, title, enquiry)
    VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $email, $title, $enquiry);

    # set parameters and execute
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $enquiry = mysqli_real_escape_string($conn, $_POST['enquiry']);

    $stmt->execute();

    echo "New records created successfully";
     //header("location: index.php?set");

    $stmt->close();
}
else
{
    //header("location: index.php?fe");
    echo "Exception handling needed in add order script.";
}

$conn-> close();
?>