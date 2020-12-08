<?php
error_reporting(0);
global $conn;
$conn = mysqli_connect("localhost", "root", "", "user_db");
$email = $_POST['email'];
$password = md5($_POST['password']);

$date = date("d-m-Y H:i:s");
$query = "SELECT * FROM users WHERE email='" . $email . "'";
$exe = $conn->query($query);
if ($exe->num_rows) {
    $query = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    $exe = $conn->query($query);
    if ($user = $exe->fetch_array()) {
        $out['status'] = TRUE;
        $out['msg'] = "User logged in successfully";
        $out['user'] = $user;
    } else {
        $out['status'] = FALSE;
        $out['msg'] = "Invalid password";
    }
} else {
    $out['status'] = FALSE;
    $out['msg'] = "No user found with this email";
}

echo json_encode($out);
exit;
