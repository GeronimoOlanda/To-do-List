<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "to_do_list";

try{
    $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo("Connecção falhou: ". $e->getMessage());
}