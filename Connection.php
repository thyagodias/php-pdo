<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

class Connection extends PDO
{
    static $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('sqlite:' . $this->caminhoBanco);
    }
}


var_dump(new Connection());
