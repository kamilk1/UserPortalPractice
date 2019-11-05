<?php

include 'db_connection.php';

$user = $_POST["signupUser"];
$pass = $_POST["signupPass"];
$email = $_POST["signupEmail"];

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');window.location.href='/index.html';</script>";
}

$conn = OpenCon();

$sql = "INSERT INTO users (username, password, email)
VALUES ('$user', '$pass', '$email')";

if ($conn->query($sql) === TRUE) {
    alert("You successfully signed up!");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

?>