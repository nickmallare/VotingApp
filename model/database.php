<?php
    $dsn = 'mysql:host=localhost;dbname=Votes';
    $username = 'ts_user';
    $password = 'pa55word';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'failed db login';
        exit();
    }
?>