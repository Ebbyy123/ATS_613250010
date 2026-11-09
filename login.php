<?php
session_start();
include "koneksi_ats.php";

if (isset($_SESSION['id'])) {
    header("Location: kendaraan.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi,
        "SELECT * FROM member_010
         WHERE email='$email' AND password='$password' AND active='1'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        $_SESSION['id']    = $data['id'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['nama']  = $data['nama'];
        header("Location: kendaraan.php");
        exit;
    } else {
        $error = "Email atau password salah, atau akun tidak aktif.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Rental Mobil Mas Bijar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/style.css">
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100">

        <!-- Panel kiri: branding -->
        <div class="col-lg-6 d-none d-lg-flex brand-panel align-items-center justify-content-center text-center p-5">
            <div>
                <i class="bi bi-car-front-fill brand-icon"></i>
                <h1 class="fw-bold mt-3">Rental Mobil Mas Bijar</h1>
                <p class="lead mb-0">Kelola data kendaraan dengan mudah, cepat, dan rapi.</p>
            </div>
        </div>

        <!-- Panel kanan: form login -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center bg-light">
            <div class="w-100 p-4" style="max-width: 420px;">

                <div class="text-center d-lg-none mb-4">
                    <i class="bi bi-car-front-fill fs-1"></i>
                    <h4 class="fw-bold mt-2">Rental Mobil Mas Bijar</h4>
                </div>

                <h3 class="fw-bold mb-1">Selamat Datang</h3>
                <p class="text-muted mb-4">Silakan login untuk melanjutkan.</p>

                <?php if ($error) { ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <div><?php echo $error; ?></div>
                    </div>
                <?php } ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control"
                                   placeholder="nama@email.com" maxlength="34" required autofocus>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Masukkan password" required>
                            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                <i class="bi bi-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" name="login" class="btn btn-login w-100 py-2">
                        Login
                    </button>
                </form>

                <p class="text-center text-muted small mt-4 mb-0">
                    &copy; <?php echo date('Y'); ?> Rental Mobil Mas Bijar
                </p>
            </div>
        </div>

    </div>
</div>

<script src="Assets/JS/Animate.js" ></script>

</body>
</html>