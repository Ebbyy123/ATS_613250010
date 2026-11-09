<?php
include "auth.php";

$id = (int) $_GET['id'];
mysqli_query($koneksi, "DELETE FROM mobil_010 WHERE no_id=$id");

header("Location: kendaraan.php");
exit;