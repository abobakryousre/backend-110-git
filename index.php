<?php
if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" and $password == "admin") {
        session_start();
        $_SESSION['username'] = "admin";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        username: <input type="text" name="username" id=""> <br>
        password: <input type="password" name="password" id=""> <br>
        <input type="submit" value="Login">
    </form>
</body>

</html>