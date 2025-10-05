<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header("Location: index.html");
    exit();
}

$username = $_SESSION['username'] ?? $_COOKIE['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: #fff;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 28px;
            font-weight: 600;
        }
        a {
            color: #fff;
            background: rgba(0,0,0,0.2);
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }
        a:hover {
            background: rgba(255,255,255,0.3);
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
