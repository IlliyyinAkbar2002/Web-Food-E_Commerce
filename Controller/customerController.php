<?php
require_once "config.php";
$connection = new Connect();


class Customers{
    private int $id;
    private string $name;
    private string $usermail;
    private string $password;
    private string $email;
    private string $phone;
    private string $address;

    public function __construct() {
        $this->id = 0;
        $this->name = "";
        $this->usermail = "";
        $this->password = "";
        $this->email = "";
        $this->phone = "";
        $this->address = "";
    }

    public function getAllCustomers(){
        $this->viewCustomer();
    }

    private function viewCustomer(){
        try {
            global $connection;
            $sql = "SELECT name, username, email, phone_number, address FROM customer";
            $pdo = $connection->connect();
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone_number']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
