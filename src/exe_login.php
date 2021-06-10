<?php

session_start();

require_once "../src/Class/Db.php";

$email    = addslashes(utf8_encode($_REQUEST['email']));
$password = addslashes(utf8_encode($_REQUEST['password']));

$sql = "SELECT * FROM user_sys WHERE email = '$email' AND password = '$password'";

$conn = new Db();
$res = $conn->exe_login($sql);

$_SESSION['email']    = $email;
$_SESSION['password'] = $password;

foreach ($res as $data) {
     echo $data['email'];
     echo $data['password'];
}

if ($email == $data['email'] && $password == $data['password']) {
     $_SESSION['email']    = $email;
     $_SESSION['password'] = $password;
     header("Location: ../public/home.php");
} else {
     header("Location: ../public/login.php");
}