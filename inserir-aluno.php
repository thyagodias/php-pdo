<?php
require_once 'vendor/autoload.php';

use Alura\Pdo\Domain\Model\Student;

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);

$students = [
    new Student(null, 'Thyago', new \DateTimeImmutable('1996-06-15')),
    new Student(null, 'Dyego', new \DateTimeImmutable('2000-02-01')),
    new Student(null, 'Dalia', new \DateTimeImmutable('1975-09-03'))
];

foreach ($students as $student) {
    $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
    $statement = $pdo->prepare($sqlInsert);
    $statement->bindValue(':name', $student->name());
    $statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

    var_dump($statement->execute());
}
