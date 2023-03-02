<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "tata" && $password == "222"){
    echo "Selamat, kamu berhasil login";
} else {
    echo "Maaf, kamu gagal login, silahkan coba lagi !";
}