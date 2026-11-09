<?php
session_start();
include "koneksi_ats.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
