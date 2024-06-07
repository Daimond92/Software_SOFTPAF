<?php

/*use PhpParser\Node\Stmt\TryCatch;

class DataBase{
    private $server;
    private $namedb;
    private $usernamedb;
    private $passworddb;
    private $charset;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->namedb = 'proyecto_softpaf';
        $this->usernamedb = 'root';
        $this->passworddb = '';
        $this->charset =  'utf8mb4';
    }

    public function connection(){
        Try{
            $connection = "mysql:host=" . $this->server . ";dbname=" . $this->namedb . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($connection, $this->usernamedb, $this->passworddb, $options);
            return $pdo;
        }
        Catch(PDOException $e){
            print_r("Error de conexión: " . $e->getMessage());
        }
    }
}*/

use PhpParser\Node\Stmt\TryCatch;

class DataBase{
    private $server;
    private $namedb;
    private $usernamedb;
    private $passworddb;
    private $charset;
    public $pdo;

    public function __construct()
    {
        $this->server = 'localhost';
        $this->namedb = 'proyecto_softpaf';
        $this->usernamedb = 'root';
        $this->passworddb = '';
        $this->charset = 'utf8mb4';
    }

    public function connection(){
        Try{
            $connection = "mysql:host=" . $this->server . ";dbname=" . $this->namedb . ";charset=" . $this->charset;
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];
            $pdo = new PDO($connection, $this->usernamedb, $this->passworddb, $options);
            return $pdo;
        }
        Catch(PDOException $e){
            print_r("Error de conexión: " . $e->getMessage());
        }
    }

    public function disconnect(){
        $this->pdo = null;
    }
}