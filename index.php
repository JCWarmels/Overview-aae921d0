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
        <table>
        <tr><th style='width:150px'>Title</th><th style='width:150px'>Rating</th></tr>
        <?php include 'table1.php'; ?>
        </table>
        <h2>Films</h2>
        <table>
        <tr><th style='width:150px'>Title</th><th style='width:150px'>Duration</th></tr>
        <?php 
        $result_films =  $pdo->query("SELECT titel, duur_in_min FROM films");
        while($row_films = $result_films->fetch()) {
            echo '<tr><td>';
            echo($row_films['titel'] . '</td><td style="text-align:center;">' .  $row_films['duur_in_min']);
            echo '</td></tr>';
        }
        ?>    
        </table>
    </main>
</body>
</html>