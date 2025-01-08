<?php 

class UserModel extends Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = $this->getConnection(); // possibilita pegar dados, escrever querys
    }

    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM pessoa");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
}