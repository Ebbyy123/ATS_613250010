<?php
include "auth.php";

if (isset($_POST['simpan'])) {
    $nomor = mysqli_real_escape_string($koneksi, $_POST['nomor_kendaraan']);
    $jenis = mysqli_real_escape_string($koneksi, $_POST['jenis_kendaraan']);
    $pemilik = mysqli_real_escape_string($koneksi, $_POST['pemilik']);
    $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun_pembuatan']);

    mysqli_query($koneksi, "INSERT INTO mobil_010
        (nomor_kendaraan, jenis_kendaraan, pemilik, tahun_pembuatan)
        VALUES ('$nomor', '$jenis', '$pemilik', '$tahun')");

    header("Location: kendaraan.php");
    exit;
}

include "header.php";
?>

<h3>Tambah Data Kendaraan</h3>
<form method="post" class="card card-body">
    <div class="mb-3">
        <label class="form-label">Nomor Kendaraan</label>
        <input type="text" name="nomor_kendaraan" class="form-control" maxlength="12" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kendaraan</label>
        <select name="jenis_kendaraan" class="form-select" required>
            <option value="Sedan">Sedan</option>
            <option value="Pickup">Pickup</option>
            <option value="Truk">Truk</option>
            <option value="Bemo">Bemo</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Pemilik</label>
        <input type="text" name="pemilik" class="form-control" maxlength="50" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tahun Pembuatan</label>
        <input type="text" name="tahun_pembuatan" class="form-control" maxlength="4" required>
    </div>
    <div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="kendaraan.php" class="btn btn-secondary">Batal</a>
    </div>
</form>

<?php include "footer.php"; ?>