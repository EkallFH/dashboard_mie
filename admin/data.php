<?php
session_start();

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "mie_ayam";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

$query = "SELECT 
            (SELECT COUNT(id) FROM menu) AS banyak_menu";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

$row = mysqli_fetch_assoc($result);

$banyak_menu = $row['banyak_menu'];


if (isset ($_POST['tambah_menu'])) {
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['gambar']['name'];

    if ($gambar != ""){
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower($x[0]);
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $acak_angka = rand(1,900);
        $nama_gambar_baru = $acak_angka.'-'.$gambar;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../uploads/'.$nama_gambar_baru);

            $query = "INSERT INTO menu (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', '$harga', '$deskripsi', '$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);

            if (!$result){
                die("Query Error : ".mysqli_errno($conn)." - " .mysqli_error($conn));
            } else {
                echo "<script>alert('Data Berhasil Ditambahkan!');window.location='menu.php';</script>";
            }
        } else{
            echo "<script>alert('Harus JPG atau PNG!');window.location='menu.php';</script>";
        }
    } else {
        $query = "INSERT INTO menu (nama_menu, harga, deskripsi) VALUES ('$nama_menu', '$harga', '$deskripsi')";
            $result = mysqli_query($conn, $query);

            if (!$result){
                die("Query Error : ".mysqli_errno($conn)." - " .mysqli_error($conn));
            } else {
                echo "<script>alert('Data Berhasil Ditambahkan!');window.location='menu.php';</script>";
            }
    }

    // $uploads = "uploads/";
    // move_uploaded_file($_FILES['gambar']['tmp_name'], $uploads . $gambar);

    // $query = "INSERT INTO menu (nama_menu, harga, deskripsi, gambar) VALUES ('$nama_menu', '$harga', '$deskripsi', '$gambar')";
    // $result = mysqli_query($conn, $query);

    // if ($tambah) {
    //     header('location:menu.php');
    // } else {
    //     echo '
    //     <script>alert("Gagal Menambah Barang");
    //     window.location.href="menu.php"
    //     </>
    //     ';
    // }
}

// EDIT MENU
if (isset($_POST['edit_menu'])) {
    $nama_menu  = $_POST['nama_menu'];
    $deskripsi =  $_POST['deskripsi'];
    $harga  = $_POST['harga'];
    $id =   $_POST['id'];

    $edit = mysqli_query($conn,"UPDATE menu set nama_menu='$nama_menu', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'");

    if ($edit) {
        header('location:menu.php');
    } else {
        echo '
        <script>alert("Gagal Mengubah Data");
        window.location.href="menu.php"
        </script>
        ';
    }
}

// HAPUS MENU
if (isset($_POST['hapus_menu'])) {
    $id = $_POST['id'];

    $hapus = mysqli_query($conn,"DELETE FROM `menu` WHERE id='$id' ");

    if ($hapus) {
        header('location:menu.php');
    } else {
        echo '
        <script>
        alert("Gagal!");
        window.location.href="menu.php"
        </script>
        ';
    }
}
?>