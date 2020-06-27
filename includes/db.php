<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'cajeroauto';
        $this->user     = 'root';
        $this->password = "12345678";
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db ;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
?>