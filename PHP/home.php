<?php
session_start();
require_once("../Controller/controller.php");


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

if (isset($_POST['logout'])) {
    $logout = new Controller();
    $logout->Auth_logout();
}


include("../Template/headerDashboard.php");

?>

<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
<form action="checkout.php" method="post">
    <div class="container">    
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                <img src="../Source/col2.png" class="card-img-top w-25 p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Soup</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn btn-primary" type="submit" name="soup">Pay now</button>
                </div>
                </div>
            </div>
            <!-- <div class="col">
                <div class="card">
                <img src="../Source/col3.png" class="card-img-top w-25 p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Black Soup</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn btn-primary" type="submit">Pay now</button>
                </div>
                </div>
            </div>   -->
        </div>
    </div>
</form>
<form action="" method="post">
    <input type="submit" class="btn btn-danger" id="logout" name="logout" value="Logout">
</form>


<?php
include("../Template/footerDashboard.php");
?>