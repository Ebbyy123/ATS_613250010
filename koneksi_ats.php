<?php
$host = "Localhost";
$user = "root";
$pass = "";
$database = "ats613250010";

// Koneksi ke server
$koneksi = new mysqli($host, $user, $pass);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal Masqu: " . $koneksi->connect_error);
}

// Memilih database
$pilih_db = $koneksi->select_db($database);

if (!$pilih_db) {
    die("Database tidak ditemukan: " . $koneksi->error);
}

$koneksi->set_charset('utf8mb4');
