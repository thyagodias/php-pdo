<?php

namespace Alura\Pdo\Infra\Persistence;

use PDO;

class ConnectionFactory
{
    static function createConnection(): PDO
    {
        $caminhoBanco = __DIR__ . '/../../../banco.sqlite';
        $connection = new PDO('sqlite:' . $caminhoBanco);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}

var_dump(ConnectionFactory::createConnection());
