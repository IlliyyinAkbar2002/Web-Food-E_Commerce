<?php

class User{
    public $name;
    public $email;
    public $password;
    public $status;
    public $prodi;

    public function __construct($name, $email, $password, $status = null, $prodi = null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
        $this->prodi = $prodi;
    }

    public function viewName(){
        return $this->name;
    }

    public function editName($newName){
        $this->name = $newName;
    }
}

$user = new User("Ahmad", "<EMAIL>", "<PASSWORD>");
// $user1 = new User("Ahmad", "<EMAIL>", "<PASSWORD>", "Mahasiswa", "Sistem Informasi");

echo $user->viewName();
echo $user->editName("Nigga");
echo $user->viewName();
