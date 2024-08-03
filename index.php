<?php

if (isset($_POST['submit-btn'])) {
    var_export($_POST);
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
        <input type="submit" value="Login" name="submit-btn">
    </form>
</body>

</html>