<!DOCTYPE html>
<html>
<head>
    <title>Placement Portal Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>IT Placement Portal</h2>
        <form action="login_process.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" name="login_btn" id="login_btn">Login</button>
        </form>
    </div>
</body>
</html>