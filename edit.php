<?php
include "auth.php";

$id = (int) $_GET['id'];

if (isset($_POST['update'])) {
    $nomor = mysqli_real_escape_string($koneksi, $_POST['nomor_kendaraan']);
    $jenis = mysqli_real_escape_string($koneksi, $_POST['jenis_kendaraan']);
    $pemilik = mysqli_real_escape_string($koneksi, $_POST['pemilik']);
    $tahun = mysqli_real_escape_string($koneksi, $_POST['tahun_pembuatan']);

    mysqli_query($koneksi, "UPDATE mobil_010 SET
        nomor_kendaraan='$nomor',
        jenis_kendaraan='$jenis',
        pemilik='$pemilik',
        tahun_pembuatan='$tahun'
        WHERE no_id=$id");

    header("Location: kendaraan.php");
    exit;
}

$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mobil_010 WHERE no_id=$id"));

include "header.php";
?>

<h3>Edit Data Kendaraan</h3>
<form method="post" class="card card-body">
    <div class="mb-3">
        <label class="form-label">Nomor Kendaraan</label>
        <input type="text" name="nomor_kendaraan" class="form-control" maxlength="12"
               value="<?php echo htmlspecialchars($row['nomor_kendaraan']); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Jenis Kendaraan</label>
        <select name="jenis_kendaraan" class="form-select" required>
            <?php foreach (['Sedan','Pickup','Truk','Bemo'] as $j) { ?>
                <option value="<?php echo $j; ?>"
                    <?php if ($row['jenis_kendaraan'] == $j) echo 'selected'; ?>>
                    <?php echo $j; ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Pemilik</label>
        <input type="text" name="pemilik" class="form-control" maxlength="50"
               value="<?php echo htmlspecialchars($row['pemilik']); ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tahun Pembuatan</label>
        <input type="text" name="tahun_pembuatan" class="form-control" maxlength="4"
               value="<?php echo $row['tahun_pembuatan']; ?>" required>
    </div>
    <div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="kendaraan.php" class="btn btn-secondary">Batal</a>
    </div>
</form>

<?php include "footer.php"; ?>