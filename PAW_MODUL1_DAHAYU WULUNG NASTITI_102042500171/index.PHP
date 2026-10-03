<?php

$produk = [
    [
        "nama" => "Samsung 43 Inch Crystal UHD",
        "kategori" => "Smart TV",
        "harga" => 5499000,
        "stok" => 5
    ],
    [
        "nama" => "LG 50 Inch UHD 4K",
        "kategori" => "Smart TV",
        "harga" => 7299000,
        "stok" => 3
    ],
    [
        "nama" => "Sony Bravia 55 Inch 4K",
        "kategori" => "Smart TV",
        "harga" => 11999000,
        "stok" => 2
    ],
    [
        "nama" => "TCL 43 Inch Google TV",
        "kategori" => "Google TV",
        "harga" => 4299000,
        "stok" => 7
    ],
    [
        "nama" => "Polytron 40 Inch Smart TV",
        "kategori" => "Smart TV",
        "harga" => 3299000,
        "stok" => 0
    ],
    [
        "nama" => "Hisense 65 Inch 4K UHD",
        "kategori" => "Smart TV",
        "harga" => 13999000,
        "stok" => 4
    ]
];


?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dahlia Store</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            Dahlia Store
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#about">About</a>
        </nav>

    </header>


    <!-- HERO -->
    <section class="hero" id="home">

        <div class="hero-content">

            <p class="hero-subtitle">
                Selamat Datang di
            </p>

            <h1>
                Dahlia Store
            </h1>

            <p>
                Temukan Berbagai Pilihan TV Untuk Rumahmu.
            </p>

            <a href="#produk" class="hero-button">
                Lihat Produk
            </a>

        </div>

    </section>


    <!-- JUMLAH PRODUK -->
    <section class="product-info">

        <h2>
            Pilihan TV
        </h2>

        <p>
            Temukan
            <strong><?= count($produk); ?></strong>
            pilihan TV yang tersedia di Dahlia Store.
        </p>

    </section>


    
    <main id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item): ?>

                <article class="product-card">

                    <div class="product-content">

                        <span class="category">
                            <?= $item["kategori"]; ?>
                        </span>

                        <h3>
                            <?= $item["nama"]; ?>
                        </h3>

                        <p class="price">
                            Rp <?= number_format($item["harga"], 0, ',', '.'); ?>
                        </p>

                        <p class="stock">
                            Stok:
                            <?= $item["stok"]; ?>
                        </p>


                        <?php if ($item["stok"] > 0): ?>

                            <span class="status available">
                                Tersedia
                            </span>

                            <button class="buy-button">
                                Beli Sekarang
                            </button>

                        <?php else: ?>

                            <span class="status empty">
                                Stok Habis
                            </span>

                            <button class="buy-button disabled" disabled>
                                Tidak Tersedia
                            </button>

                        <?php endif; ?>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </main>


    
    <section class="about" id="about">

        <h2>
            About Dahlia Store
        </h2>

        <p>
            Dahlia Store menyediakan berbagai pilihan TV dengan ukuran,merek
            dan fitur yang beragam untuk kebutuhan hiburan di rumah.

        </p>

    </section>


   
    <footer>

        <p>
            &copy; 2026 Dahlia Store. All Rights Reserved.
        </p>

    </footer>

</body>

</html>