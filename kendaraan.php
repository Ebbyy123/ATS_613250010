<?php
include "auth.php";
include "header.php";

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$data = mysqli_query($koneksi, "SELECT * FROM mobil_010 ORDER BY no_id ASC");
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Kendaraan</h3>
    <a href="tambah.php" class="btn btn-primary">+ Tambah Data</a>
</div>

<div class="table-responsive">
<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nomor Kendaraan</th>
            <th>Jenis</th>
            <th>Pemilik</th>
            <th>Tahun</th>
            <th width="150">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($row['nomor_kendaraan']); ?></td>
            <td><?php echo $row['jenis_kendaraan']; ?></td>
            <td><?php echo htmlspecialchars($row['pemilik']); ?></td>
            <td><?php echo $row['tahun_pembuatan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['no_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="hapus.php?id=<?php echo $row['no_id']; ?>" class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>

<?php
include "footer.php";
?>