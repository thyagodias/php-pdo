<?php

namespace Alura\Pdo\Infra\Persistence;

use PDO;

class ConnectionFactory
{
    static function createConnection(): PDO
    {
        $caminhoBanco = __DIR__ . '/../../../banco.sqlite';
        return new PDO('sqlite:' . $caminhoBanco);
    }
}

var_dump(ConnectionFactory::createConnection());
