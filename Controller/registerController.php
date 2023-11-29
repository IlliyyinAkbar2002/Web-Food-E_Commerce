<?php
class RegisterController
{
    private $full_name;
    private $username;
    private $password;
    private $email;
    private $phone_number;

    public function __construct($full_name, $username, $password, $email, $phone_number)
    {
        $this->full_name = $full_name;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    public function register($full_name, $username, $password, $email, $phone_number)
    {
        $this->full_name = $full_name;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->phone_number = $phone_number;

        $this->validateInput();
    }

    private function validateInput()
    {
        if (empty($this->full_name) || empty($this->username) || empty($this->password) || empty($this->email) || empty($this->phone_number)) {
            echo "<script>alert('Please fill all the fields.')</script>";
        } else {
            echo "<script>alert('Success')</script>";
        }
    }

    public function getFullName()
    {
        return $this->full_name;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
}
