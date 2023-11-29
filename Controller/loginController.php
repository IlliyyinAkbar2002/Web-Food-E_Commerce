<?php
class LoginController
{
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = md5($password);
    }

    public function login($username, $password)
    {
        $this->username = $username;
        $this->password = ($password);

        $this->validateInput();
    }

    private function validateInput()
    {
        if (empty($this->username) || empty($this->password)) {
            echo "<script>alert('Please fill all the fields.')</script>";
        } else {
            echo "<script>alert('Success')</script>";
        }
    }
}
