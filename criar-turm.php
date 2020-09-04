<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionFactory;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionFactory::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

$aStudent = new Student(null, 'Pedro', new \DateTimeImmutable('2001-01-01'));
$studentRepository->save($aStudent);

$anotherStudent = new Student(null, 'Paulo', new \DateTimeImmutable('2001-01-01'));
$studentRepository->save($anotherStudent);

$connection->commit();
