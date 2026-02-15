<?php
session_start();
include('db.php');
if($_SESSION['role'] != 'student') { header("Location: index.php"); exit(); }

$jobs = mysqli_query($conn, "SELECT * FROM jobs");
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Welcome Student: <?php echo $_SESSION['user']; ?></h1>
    <h3>Available Job Drives</h3>
    <table border="1">
        <tr><th>Company</th><th>Role</th><th>Min CGPA</th></tr>
        <?php while($row = mysqli_fetch_assoc($jobs)) { ?>
        <tr>
            <td><?php echo $row['company_name']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['eligibility_cgpa']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><a href="logout.php">Logout</a>
</body>
</html>