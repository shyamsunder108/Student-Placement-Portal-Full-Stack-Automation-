<?php
session_start();
include('db.php');
if($_SESSION['role'] != 'admin') { header("Location: index.php"); exit(); }

if(isset($_POST['add_job'])) {
    $comp = $_POST['company'];
    $role = $_POST['role'];
    $cgpa = $_POST['cgpa'];
    mysqli_query($conn, "INSERT INTO jobs (company_name, role, eligibility_cgpa) VALUES ('$comp', '$role', '$cgpa')");
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Admin Panel - Add Job Drive</h1>
    <form method="POST">
        <input type="text" name="company" placeholder="Company Name" required>
        <input type="text" name="role" placeholder="Role" required>
        <input type="number" step="0.1" name="cgpa" placeholder="Min CGPA" required>
        <button type="submit" name="add_job">Add Job</button>
    </form>
    <br><a href="logout.php">Logout</a>
</body>
</html>