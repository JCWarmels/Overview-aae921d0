<?php

$dsn = "mysql:host=localhost;dbname=netland";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body>
    <main>
        <h1>Welkom op het netland beheerderspaneel</h1>
        <h2>Series</h2>
        <?php
        echo $pdo->query("SELECT title, rating FROM series ORDER BY rating DESC")
        ?>
    </main>
</body>
</html>