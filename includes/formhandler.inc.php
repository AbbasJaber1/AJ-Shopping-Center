<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["pass"];

            try {
                require_once "dbh.inc.php";
                $query ="INSERT INTO users(username,pass) VALUES (?,?);";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$username,$password]);
                $pdo = null;
                $stmt = null;
                header("Location: ../login.php");

            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }

    }
else {
    header("Location: ../login.php");
}








