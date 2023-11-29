<?php
include("../Controller/loginController.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $loginController = new LoginController($username, $password);
    $loginController->login($username, $password);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page Food Commerce</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <form action="login.php" method="post">
                <input id="username" type="text" name="username" placeholder="Username">
                <input id="password" type="password" name="password" placeholder="Password">
                <button id="submit" type="submit" class="btn btn-primary btn-block btn-large">Submit.</button>
                <button type="register" class="btn btn-success btn-block btn-large">Register</button>
            </form>
        </div>
    </div>
    <!-- <script src="../JS/login.js"></script> -->
</body>

</html>