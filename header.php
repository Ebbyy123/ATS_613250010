<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil Mas Bijar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/CSS/style_crud.css">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-tema">
    <div class="container">
        <a class="navbar-brand" href="kendaraan.php">Rental Mobil Mas Bijar</a>
        <div class="d-flex align-items-center text-white">
            <span class="me-3">Halo, <?php echo htmlspecialchars($_SESSION['nama']); ?></span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </div>
</nav>

<main class="container my-4 flex-grow-1">