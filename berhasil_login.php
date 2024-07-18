<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.boostrapcdn.com/font-awsome/4.7.0/css/font-awsome.min.cs">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>berhasil login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-username">
            <?php echo "<h1>selamat datang, " .$_SESSION['username'] . "!". "</h1>";?>

            <div class="input-group">
                <a href="logout.php" class="btn">masuk</a>
            </div>
        </form>

    </div>
    

</body>
</html>