<?php
session_start();
require 'auth.php';

if (isset($_POST['login'])) {

    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));
    $remember = isset($_POST['remember']);

    if (authenticate($username, $password)) {

        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie('username', $username, time() + (86400 * 7), "/", "", false, true); 
        } else {
            setcookie('username', '', time() - 3600, "/");
        }

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center; font-family: Poppins, sans-serif;'>Invalid username or password! <a href='index.html'>Try again</a></p>";
    }
}
?>
