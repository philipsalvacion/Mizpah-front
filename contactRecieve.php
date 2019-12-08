<?php
include 'DBConn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$sql = "INSERT INTO contacts VALUES ('$name', '$email', '$phone', '$msg')";

if (mysqli_query($conn, $sql)) {
	echo "Thank you for contacting us!";
}
else {
	echo "Error occur, please try again";
}
?>
