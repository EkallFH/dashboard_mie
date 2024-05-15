<?php

$server = 'localhost'; // default
$user = 'root'; // default
$pass = '';  // default 

$db = 'mie_ayam';  // nama database masing - masing

$koneksi = mysqli_connect($server, $user, $pass, $db);

if(!$koneksi) echo 'failed to connect';
else echo 'Masuk!';
?>