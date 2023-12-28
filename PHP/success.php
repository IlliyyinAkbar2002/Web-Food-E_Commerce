<?php
session_start();
if ($_SESSION['role_user_id'] != 2) {
    header("Location: login.php");
    exit;
}else if($_SESSION['role_user_id'] != 2){
    header("Location: ../index.php");
    exit;
}

if (isset($_SESSION['login'])) {
    echo "<script>alert('" . $_SESSION['login'] . "')</script>";
    unset($_SESSION['login']);
}
include("../Template/headerDashboard.php");
?>

<h1>Your payment was successful. Thank you!!</h1>

<form action="home.php" method="post">
    <input type="submit" class="btn btn-danger" id="logout" name="logout" value="Logout">
</form>

<?php
include("../Template/footerDashboard.php");
?>