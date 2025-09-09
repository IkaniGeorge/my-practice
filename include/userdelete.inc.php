<?php
//how to delete user data in db
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND
        pwd =:pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../userdelete.php");
        die(); 
    } catch (PDOException $e) {
        die("querry failed:" . $e->getMessage);
    }
}    else{
        header("Location: ../userdelete.php");

    }