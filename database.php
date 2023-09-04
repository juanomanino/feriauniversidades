<?php
    $server = "localhost";
    $username = "colegiog_sistemas";
    $password = "sis2021";
    $database = "colegiog_registrouni";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;" ,$username, $password);
      	$conn->exec("set names utf8mb4");
    } catch(PDOException $e){
        die('Connected failed: ' . $e->getMessage());
    }
?>