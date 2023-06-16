<?php

require_once "../db/db-connection.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $phoneNumber = $_POST["phone"];
    $userName = $_POST["name"];
    $userPassword = $_POST["password"];
    $phoneSearchSql = "SELECT * FROM customers WHERE phone = :phone";
    $checkPhoneStmt = $conn->prepare($phoneSearchSql);
    $checkPhoneStmt->bindParam(':phone', $phoneNumber);
    $checkPhoneStmt->execute();
    $checkPhoneRs = $checkPhoneStmt->rowCount();

    if ($checkPhoneRs > 0) {
        $_SESSION["errMsg"]  = "Phone number already in use";
        header("Location: ./sign-up.php");
        exit();
    } else {
        $addUserStmt = "INSERT INTO customers (name, phone, password) VALUES (?,?,?)";
        $userStmtPrep = $conn->prepare($addUserStmt);
        $params = array( $userName,  $phoneNumber,  password_hash($userPassword, PASSWORD_DEFAULT));

        try {
            $userStmtPrep->execute($params);
            header("Location: ../sign-in/sign-in.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
