<?php
include("../Controller/registerController.php");


if (isset($_POST['full_name']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone_number'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    $registerController = new RegisterController($full_name, $username, $password, $email, $phone_number);
    $registerController->register($full_name, $username, $password, $email, $phone_number);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>

<body>
    <div class="container">
        <div class="register">
            <h1>Registration</h1>
            <form class="form-group" action="register.php" method="post">
                <label for="">Full Name</label>
                <input id="full_name" type="text" name="full_name" placeholder="Full Name">
                <label for="">Username</label>
                <input id="username" type="text" name="username" placeholder="Username">
                <label for="">Password</label>
                <input id="password" type="password" name="password" placeholder="Password">
                <label for="">Email</label>
                <input id="email" type="text" name="email" placeholder="Email">
                <label for="">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" placeholder="Phone Number">
                <button id="submit" type="submit" class="btn btn-primary btn-block btn-large">Submit.</button>
            </form>
        </div>
    </div>
    <!-- <script src="../JS/register.js"></script> -->
</body>

</html>