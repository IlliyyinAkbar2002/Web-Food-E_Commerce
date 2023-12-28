<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'config.php';
$config = new Connect();

class Controller
{
    private $username;
    private $password;

    public function __construct()
    {
        // Constructor remains empty
    }

    public function Auth_login($username, $password)
    {
        global $config;
        $stmt2 = $config->pdo->prepare("SELECT * FROM customer WHERE username = ?");
        $stmt2->bindParam(1, $username);
        $stmt2->execute();
        $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

        $stmt = $config->pdo->prepare("SELECT * FROM admin WHERE username = ?");
        $stmt->bindParam(1, $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row && password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role_user_id'] = $row['role_user_id']; // Added this line
            $_SESSION['login'] = 'Login Success!';
            header("Location: ../PHP/dashboard.php");
            exit;
        } elseif ($row2 && password_verify($password, $row2['password'])) {
            $_SESSION['id'] = $row2['id'];
            $_SESSION['name'] = $row2['name'];
            $_SESSION['username'] = $row2['username'];
            $_SESSION['password'] = $row2['password'];
            $_SESSION['role_user_id'] = $row2['role_user_id']; // Added this line
            $_SESSION['login'] = 'Login Success!';
            header("Location: ../PHP/home.php");
            exit;
        } else {
            echo "<script>alert('Invalid username or password.')</script>";
        }
    }

    public function Auth_logout()
    {
        // Initialize the session.
        $_SESSION['logout'] = 'Logout Success!';

        // Store the logout message in a variable before destroying the session
        $logoutMessage = $_SESSION['logout'];

        // Unset all of the session variables.
        $_SESSION = array();

        // If it's desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params["path"],
                $params["domain"],
                $params["secure"],
                $params["httponly"]
            );
        }

        // Finally, destroy the session.
        session_unset();
        session_destroy();

        // Start a new session and set the logout message
        session_start();
        $_SESSION['logout'] = $logoutMessage;

        header('Location: ../PHP/login.php');
        exit;
    }

    public function Check_conn()
    {
        $connect = new Connect();
        $connect->isConnected();
    }
}
