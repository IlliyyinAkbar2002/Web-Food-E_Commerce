<?php

class Connect
{
    private $host = 'localhost';
    private $db = 'E_Commerce';
    private $user = 'postgres';
    private $pass = 'Illiyyin_Akbar_2002';
    private $dsn;
    public $pdo;
    private $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct()
    {
        $this->dsn = "pgsql:host=$this->host;dbname=$this->db";
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
    }

    public function connect() {
        try {
            $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function query($sql)
    {
        return $this->pdo->query($sql);
    }

    public function isConnected()
    {
        if ($this->pdo) {
            echo "Connected to the $this->db database!";
        } else {
            echo "Failed to connect to the $this->db database!";
        }
    }
}
