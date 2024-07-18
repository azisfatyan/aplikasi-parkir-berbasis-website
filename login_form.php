<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Login</title>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('gambar/mobil balapan.jpeg'); 
    font-family: Arial, sans-serif;
  }
  
  .login-form {
    background-color: rgba(#3333333);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.8);
    width: 300px;
  }
  
  .login-form h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .login-form input[type="text"],
  .login-form input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #4CAF50;
    border-radius: 4px;
    font-size: 16px;
  }
  
  .login-form input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #4CAF50;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }
  
  .login-form input[type="submit"]:hover {
    background-color: #45a049;
  }

  .logout-link {
    text-align: center;
    margin-top: 10px;
  }

  .logout-link a {
    color: #333;
    text-decoration: none;
  }

  .logout-link a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
<div class="login-form">
  <h2>Login Admin</h2>
  <form action="login_process.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
  </form>
</div>
</body>
</html>
