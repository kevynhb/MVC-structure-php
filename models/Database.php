<?php 

class Database 
{
    public function getConnection()
    {
        try{
            // Tem que ter um banco teste rodando
            $pdo = new PDO("mysql:dbname=teste;host=127.0.0.1", "root", "");
            return $pdo;
        } catch (PDOException $err) {

        }
    }
}