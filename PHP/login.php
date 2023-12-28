<?php
session_start();
include("../Controller/controller.php");
include("../Template/headerLogin.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginController = new Controller();
    $loginController->Auth_login($username, $password);
}

if (isset($_SESSION['logout'])) {
    echo "<script>alert('" . $_SESSION['logout'] . "')</script>";
    unset($_SESSION['logout']);
}

?>

<div class="container">
    <div class="login">
        <h1>Login</h1>
        <form action="" method="post">
            <input id="username" type="text" name="username" placeholder="Username">
            <input id="password" type="password" name="password" placeholder="Password">
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-large">Login</button>
            <!-- <button type="register" class="btn btn-success btn-block btn-large">Register</button> -->
            <a href="register.php" class="btn btn-success btn-block btn-large">Register</a>
        </form>
    </div>
</div>

<?php
include("../Template/footerLogin.php");
?>