<?php
session_start();
if (isset($_SESSION["userId"])) {
    header("Location: ../index.php");     //se l'id è settato rimanda a index
}

include __DIR__ . "/../Models/user.php"; //prendiamo i dati

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $authenticated = array_filter($users, function ($element) use ($email, $password) {
        return $element["email"] === $email && $element["password"] === $password;
    });
    if (count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION["userId"] = $user['id'];
        $_SESSION["name"] = $user['name'];
        header("Location: ../index.php");
    } else {
        header("Location: login.php?error=1");
        //errore
    }
}
