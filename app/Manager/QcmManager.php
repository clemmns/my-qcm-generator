<?php

class QcmManager
{
    private $pdo;

    public function __construct()
    {
        try
        {
            $this->pdo = new PDO('mysql:localhost:3306*my_qcm_generator','root');
        }
        catch(PDOException $e)
        {
            echo 'Error : ' . $e->getMessage();
            die;
        }
    }
    public function getAll()
    {
        $req = $this->pdo->prepare('SELECT * FROM qcm');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOS);
    }

}