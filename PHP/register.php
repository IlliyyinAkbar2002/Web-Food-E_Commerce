<?php
include("../Controller/registerController.php");
include("../Template/headerRegister.php");

$register = new RegisterController();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $role_user_id = isset($_POST['role_user_id']) ? 2 : 1; // Set role_user_id to 2 if the checkbox is checked, or 1 otherwise

    $register->registerUser($name, $username, $password, $email, $phone_number, $address, $role_user_id);
    echo "<script>alert('Success')</script>";
    // echo "<script>window.location.href='login.php'</script>";
}

?>

<div class="container">
    <div class="register">
        <h1>Registration</h1>
        <form class="form-group" action="register.php" method="post">
            <label for="">Name</label>
            <input id="name" type="text" name="name" placeholder="Name">
            <label for="">Username</label>
            <input id="username" type="text" name="username" placeholder="Username">
            <label for="">Password</label>
            <input id="password" type="password" name="password" placeholder="Password">
            <label for="">Email</label>
            <input id="email" type="text" name="email" placeholder="Email">
            <label for="">Phone Number</label>
            <input id="phone_number" type="text" name="phone_number" placeholder="Phone Number">
            <label for="">Address</label>
            <input id="address" type="text" name="address" placeholder="Address">
            Remember me
            <input id="role_user_id" type="checkbox" name="role_user_id" style="width: 15px; height: 15;" placeholder="Role user">
            <!-- <br> -->
            <button id="submit" type="submit" class="btn btn-primary btn-block btn-large">Submit.</button>
        </form>
    </div>
</div>

<?php
include("../Template/footerRegister.php");
?>