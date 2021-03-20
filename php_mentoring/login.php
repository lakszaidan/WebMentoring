<?php

session_start();

$user = $_POST["username"];
$password = $_POST["password"];

if ($user == 'udacodingid' && $password == 'udacoding') {
    if ($_SESSION["code"] == $_POST["kodecaptcha"]){
        header('Location: index.php');
        exit;
    } else {
        echo "<div style='text-align: center;'>
                <h1>Captcha yang anda masukkan salah</h1>
                <a href='helloworld.php' style='text-decoration:none;'>Kembali ke Login</a>
              </div>";
    }
} else {
    header('Location: fail.php');
    exit;
}
