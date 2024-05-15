<?php 
include "./config/koneksi.php" ;

if(isset($_POST['inputdata'])){
    // 
    $name = $_POST['nama']; 
    $email = $_POST['email']; 
    $message = $_POST['pesan'];


    $query = "INSERT INTO contack (`nama`, `email`, `pesan`) VALUES ('$name','$email','$message')";
    mysqli_query($koneksi, $query);

    header("location:pagecontack.php");

}




?>