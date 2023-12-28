<?php
require_once 'config.php';

class RegisterController {
    private $id;
    private $name;
    private $username;
    private $password;
    private $email;
    private $phone_number;
    private $address;
    private $role_user_id;

    public function __construct()
    {
        $this->id = "";
        $this->name = "";
        $this->username = "";
        $this->password = "";
        $this->email = "";
        $this->phone_number = "";
        $this->address = "";
        $this->role_user_id = "";
    }


    private function validateInput()
    {
        if (empty($this->name) || empty($this->username) || empty($this->password) || empty($this->email) || empty($this->phone_number)) {
            echo "<script>alert('Please fill all the fields.')</script>";
        } else {
            echo "<script>alert('Success')</script>";
        }
    }

    public function registerUser($name, $username, $password, $email, $phone_number, $address, $role_user_id)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->role_user_id = $role_user_id;

        $this->validateInput();
        $this->insertUser();
    }

    private function insertUser()
    {
        $sql = "INSERT INTO public.customer(name, username, password, email, phone_number, address, role_user_id) 
                VALUES (?, ?, crypt(?, gen_salt('md5')), ?, ?, ?, ?)";
        $pdo = new Connect();
        $stmt = $pdo->pdo->prepare($sql);
        $stmt->bindValue(1, $this->name);
        $stmt->bindValue(2, $this->username);
        $stmt->bindValue(3, $this->password);
        $stmt->bindValue(4, $this->email);
        $stmt->bindValue(5, $this->phone_number);
        $stmt->bindValue(6, $this->address);
        $stmt->bindValue(7, $this->role_user_id);
        if ($stmt->execute()) {
            echo "<script>alert('Success')</script>";
            header("Location: login.php");
            exit();
        } else {
            echo "<script>alert('Failed')</script>";
        }
    }
}