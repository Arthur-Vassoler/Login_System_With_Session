<?php

session_start();

if ((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['password']) == true)) {
     unset($_SESSION['email']);
     unset($_SESSION['password']);
     header("Location: ../../public/login.php");
}

$logged = $_SESSION['email'];