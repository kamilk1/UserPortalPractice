<?php

include 'db_connection.php';

$user = $_POST["loginUser"];
$pass = $_POST["loginPass"];

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');window.location.href='/index.html';</script>";
}

$conn = OpenCon();

//Login Query
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: /src/pages/user_portal.html");
} else {
    alert("Invalid Username/Password");
}

CloseCon($conn);

?>


