<?php
require_once '../Controller/controller.php';
include("../Template/headerDashboard.php");


if ($_SESSION['role_user_id'] != 1) {
    header("Location: login.php");
    exit;
}else if($_SESSION['role_user_id'] != 1){
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
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline"><?php echo $_SESSION['name']; ?></span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="orders.php" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>
                    <li>
                        <a href="products.php" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span></a>
                    </li>
                    <li>
                        <a href="customers.php" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span></a>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-5">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['name']; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <form action="" method="post">
                            <input type="submit" class="btn btn-danger" id="logout" name="logout" value="Logout">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <h3>Dashboard <?php echo $_SESSION['name']; ?> !</h3>
        </div>
    </div>
</div>
<?php
include("../Template/footerDashboard.php");
?>