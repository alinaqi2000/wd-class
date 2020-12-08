<?php
error_reporting(0);
global $conn;
$conn = mysqli_connect("localhost", "root", "", "user_db");
$name = $_POST['name'];
$email = $_POST['email'];
$image_url = $_POST['image_url'];
$password = md5($_POST['password']);
$c_password = $_POST['c_password'];
$date = date("d-m-Y H:i:s");
$query = "INSERT INTO `users` (name, email, image_url, password, created_at)
VALUES ('" . $name . "', '" . $email . "', '" . $image_url . "', '" . $password . "', '" . $date . "')";
$exe = $conn->query($query);
if ($exe) {
    $out['status'] = TRUE;
    $out['msg'] = "User registered successfully";
} else {
    $out['status'] = FALSE;
    $out['msg'] = "Something went wrong";
}

echo json_encode($out);
exit;
