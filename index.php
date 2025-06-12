<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeeBool - Jualan Bakso Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff3e0;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background: linear-gradient(90deg, #ff5722, #ff9800);
        }
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        .produk-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }
        .produk-card:hover {
            transform: translateY(-6px);
        }
        .btn-wa {
            background-color: #25D366;
            color: white;
            font-weight: bold;
            border-radius: 50px;
        }
        .btn-wa:hover {
            background-color: #1ebe57;
        }
        .judul-section {
            color: #e53935;
            font-weight: 800;
            text-shadow: 1px 1px 0 #fff176;
        }
        footer {
            background-color: #ffccbc;
            color: #4e342e;
            font-size: 14px;
        }
        .floating-wa {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            z-index: 999;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: background 0.3s;
        }
        .floating-wa:hover {
            background-color: #128C7E;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="logo.jpg" alt="MeeBool Logo">
            <span class="fs-4 text-white fw-bold">MeeBool</span>
        </a>
    </div>
</nav>

<!-- MENU -->
<div class="container mt-5">
    <h2 class="text-center mb-5 judul-section">Menu Bakso Frozen Food MeeBool</h2>
    <div class="row g-4">
        <?php
        $produks = [
            [
                'nama' => 'Bakso Sapi kecil',
                'harga' => 55000,
                'deskripsi' => 'Bakso kecil 1/2 kg',
                'foto' => 'Bakso_sapi_biasa.jpg'
            ],
            [
                'nama' => 'Bakso Ayam biasa',
                'harga' => 50000,
                'deskripsi' => 'Bakso Ayam 1/2 kg',
                'foto' => 'Bakso_ayam_biasa.jpeg'
            ],
            [
                'nama' => 'Bakso Pimpong',
                'harga' => 60000,
                'deskripsi' => 'Mix Sapi dan Ayam 1/2 kg',
                'foto' => 'Bakso_pimpong.jpg'
            ],
        ];

        foreach ($produks as $produk):
        ?>
            <div class="col-md-4">
                <div class="card produk-card h-100 border-0">
                    <img src="<?= $produk['foto'] ?>" class="card-img-top" alt="<?= $produk['nama'] ?>">
                    <div class="card-body">
                        <h5 class="card-title text-danger fw-bold"><?= $produk['nama'] ?></h5>
                        <p class="card-text text-muted">Rp<?= number_format($produk['harga'], 0, ',', '.') ?></p>
                        <p class="card-text small"><?= $produk['deskripsi'] ?></p>
                        <a href="https://wa.me/6283178270980?text=Halo%20MeeBool,%20saya%20ingin%20pesan%20<?= urlencode($produk['nama']) ?>%0A%0ANama%20:%20%0APcs%20:%20%0AAlamat%20:%20%0APayment%20:%20"
                           class="btn btn-wa w-100" target="_blank">
                            🛒 Pesan via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- TOMBOL CHAT MENGAMBANG -->
<a href="https://wa.me/6283178270980?text=Halo%20MeeBool%2C%20saya%20mau%20bertanya..."
   class="floating-wa" target="_blank" title="Chat dengan MeeBool">
    💬
</a>

<!-- FOOTER -->
<footer class="text-center mt-5 py-4">
    &copy; <?= date('Y') ?> MeeBool. Bakso Lezat, Harga Bersahabat.
</footer>

</body>
</html>
