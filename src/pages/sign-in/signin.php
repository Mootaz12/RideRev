<?php
session_start();
require_once "../db/db-connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phoneNumber = $_POST["phone"];
    $password = $_POST["password"];

    $searchUserSql = "SELECT * FROM customers WHERE phone=:phone";
    $searchUserStmt = $conn->prepare($searchUserSql);
    $searchUserStmt->bindParam(":phone", $phoneNumber);
    $searchUserStmt->execute();
    $searchUserResult = $searchUserStmt->fetch(PDO::FETCH_BOTH);
    $searchUserRows = $searchUserStmt->rowCount();
    
    if ($searchUserRows == 0) {
        $_SESSION["errMsg"] = "User doesn't exist";
        header("Location: ./sign-in.php");
        exit();
    } else {
        if ($searchUserResult["phone"] == $phoneNumber && password_verify($password, $searchUserResult["password"])) {
            header("Location: ../../../index.html");
            exit();
        } else {
            $_SESSION["errMsg"] = "Information doesn't match";
            header("Location: ./sign-in.php");
            exit();
        }
    }
}
?>
