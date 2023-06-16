<?php
$databaseHost = 'localhost';
$databaseName = 'RideRev';
$databaseUser = 'mo3taz';
$databasePassword = 'Password';
try{
    $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUser, $databasePassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $message = $e->getMessage()  ;
    header('Content-Type: text/plain');
    echo $message;
}   
?>