<?php

//Variabel database
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "db_animal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Prepare the SQL statement
if ($_GET['nama']) {
    $result = mysqli_query($conn, "INSERT INTO animal VALUES('" . $_GET["nama"] . "','" . $_GET["akurasi"] . "')");

    if (!$result) {
        echo json_encode(['status' => 'Gagal', 'pesan' => mysqli_error($conn)]);
    } else {
        echo json_encode(['status' => 'Berhasil', 'label' => $_GET['nama'], 'akurasi' => $_GET['akurasi'], 'data' => $_GET]);
    }
}
