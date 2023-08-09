<?php

namespace acciones\src\model;

//PDO es una extension para acceder a las DB
use PDO;
use PDOException;

Class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;


    public function __construct()
    {
        $this->host = 'localhost';
        $this->db ='stocks'; //nombre de la base de datos
        $this->user='root';  //'usuario' root porque es local
        $this->password='';   //roor porque es local
        $this->charset='utf8mb4';

    }

    function connect()
    {
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=". $this->charset;
             $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ] ;
            $pdo= new PDO($connection, $this->user, $this->password, $options);
            return $pdo;

        } catch (PDOException $e){
            print_r('Error connection:' .$e->getMessage());
        }
    }
}
