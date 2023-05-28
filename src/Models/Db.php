<?php

namespace App\Models;

use \PDO;

class Db
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '12345678';
    private $dbname = 'customers_api';

    public function connect()
    {
        $conn_str = "mysql:host=$this->host;dbname=$this->dbname";
        $conn = new PDO($conn_str, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
}
