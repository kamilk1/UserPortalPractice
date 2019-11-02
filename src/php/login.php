<?php

include 'db_connection.php';

$conn = OpenCon();

$user = $_POST["username"];
$pass = $_POST["password"];

$sql = "INSERT INTO users (username, password)
VALUES ('$user', '$pass')";

if ($conn ->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

CloseCon($conn);

?>