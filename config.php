<?php
$host = 'localhost';      // Хост за базата данни (често localhost)
$dbname = 'unispace';     // Името на базата данни

// Задай директно потребителското име и парола тук
$username = 'твое_потребителско_име';  // Замени с твоето MySQL потребителско име
$password = 'твоята_парола';            // Замени с твоята MySQL парола

// Опит за свързване с базата данни чрез PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Активиране на обработка на грешки
    echo "Успешно свързан с базата данни!";
} catch (PDOException $e) {
    die("Грешка при връзка с базата: " . $e->getMessage()); // Показва грешка, ако не може да се свърже
}
?>