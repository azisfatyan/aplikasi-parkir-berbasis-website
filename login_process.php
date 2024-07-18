<?php
session_start();


$valid_username = "admin123";
$valid_password = "admin12345";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
        echo "<script>window.location.href = 'login_form.php';</script>";
        exit();
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: login_form.php");
    exit();
}
?>
