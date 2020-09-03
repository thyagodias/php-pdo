<?php
require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$preparedStatement =  $pdo->prepare('DELETE FROM students WHERE id = ?;');

$preparedStatement->bindValue(1, 16, PDO::PARAM_INT);
$preparedStatement->execute();

$preparedStatement->bindValue(1, 17, PDO::PARAM_INT);
$preparedStatement->execute();
