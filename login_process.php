<?php
session_start();
include('db.php');

if(isset($_POST['login_btn'])) {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$uname' AND password='$pwd'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if($row['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: student_dashboard.php");
        }
    } else {
        echo "<script>alert('Invalid Login'); window.location='index.php';</script>";
    }
}
?>