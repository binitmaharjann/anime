<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php"  method="POST">
        <h3>Login Form</h3>
        <div class="inputBox">
          <input type="text" name="username" />
          <span>Username</span>
        </div>
        <div class="inputBox">
          <input type="password" name="password" /> <span>Password</span>
        </div>
        <input class="login" type="submit" value="Login" />
      </form>
</body>
</html>