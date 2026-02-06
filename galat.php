<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "includes/base_url.php" ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
</head>

<body>
    <div class="bg-primary">


        <?php
        // isset digunakan untul mengecek apakah sebuah variable ada datanya atau tidak;
        if (!isset($_GET['pesan'])) {
            $judul = "Kesalahan sistem";
            $isi = "Mohon maaf saat ini sistem tidak bisa diproses,silahkan coba lagi nanti ya :)";
            $link = base_url;
            $ikon = "";
            $tombol = "Kembali ke halaman beranda";
            $wtom = "btn-danger";
        } else {
            if ($_GET['pesan'] === "login_gagal") {
                $judul = "Kesalahan sistem";
                $isi = "Akun yang anda masuukkan tidak ditemukan";
                $link = base_url . "login";
                $ikon = "";
                $tombol = "login kembali";
                $wtom = "btn-warning";
            }
        }
        ?>
        <h2><?= $judul; ?></h2>
        <p><?= $isi; ?></p>
        <a href="<?= $link ?>" class="btn <?= $wtom ?>"><?= $ikon ?><?= $tombol ?></a>
    </div>
</body>

</html>