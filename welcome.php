<?php
session_start();


if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}


$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .welcome-text {
            margin-top: 20px;
        }
        .dashboard-link {
            margin-top: 10px;
        }
        .dashboard-link a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .dashboard-link a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <div class="welcome-text"></div>
        <div class="dashboard-link">
        </div>
        
    </div>
</body>
</html>
