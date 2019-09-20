<?php

namespace classes;

class database
{
    private $pdo;

    public function __construct($tablename)
    {
        $connect = "mysql:host=localhost;dbname=$tablename";
        $username = "root";
        $password = "";
        $this->pdo = new \PDO($connect, $username, $password);
        if ($this->pdo->errorCode() !== null) {
            print_r($this->pdo->errorInfo());
            exit();
        }
    }

    public function query($string)
    {
        $users = $this->pdo->query($string);
        if($users instanceof \PDOStatement) {
            $rows=[];
            foreach ($users as $user) {
                $rows[]=$user;
            }
            return $rows;
        }
        else{
            print_r($this->pdo->errorInfo());
            exit();
        }
    }
}