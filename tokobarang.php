<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BANTENG BIRU</title>
    <link rel="stylesheet" href="toko.css">
</head>

<body>
    <?php
        $kode="RED-DS-001";
        $product="Daytona Sneaker";
        $desc="<b>WARNA :</b><br>
        - Coklat<br>
        - Hitam Abu<br>
        - Hitam Coklat<br><br>
        <b>SPESIFIKASI :</b><br>
        -Outsole menggunakan teknologi injection sehingga dijamin 100% tidak akan jebol.<br>
        -Insole menggunakan foam yang sangat empuk.<br>
        -Outsole dijamin tidak akan licin karna menggunakan rubber.<br>
        -Upper menggunakan kain flyknit yang membuat kaki tidak terasa panas.<br>";
        $kirim="
        -JNE<br>
        -JNT<br>
        -SiCepat<br>
        -AnterAja<br>";
    ?>

    <header class="main__head">
        <nav>
            <ul>
                <b><li>TOKO BANTENG BIRU</li></b>
                <li>Koleksi</li>
                <li>Pria</li>
                <li>Wanita</li>
                <li>Tentang</li>
                <li>Kontak</li>
            </ul>
        </nav>
        <div class="card">
            <ul>Keranjang</ul>
            <ul>Ridwan</ul>
        </div>
    </header>

    <main class="main__content">


        <img src="./daytona.jpg" alt="" width="512">
        <div class="right">
            <div class="text">
                <p>
                <?php
                    echo $kode;
                ?>                                        
                </p><br>
                <h1>
                <?php
                    echo $product;
                ?>
                </h1>
                <p><br>
                <?php
                    echo $desc;
                ?>
                </p><br>
                <h4>Dikirim dari : Kota Purworejo</h4><br>
                <h4>
                    <b>Metode Pengiriman : </b>
                </h4>
                    <?php
                    echo $kirim;
                ?>
            </div>
            <div class="price">

            <div class="spans">

                    <span class="dis">
                        50%
                    </span>
            </div>
            <p class="current-price">
                        Rp. 200.000
                </p>
                <p class="pre-price">
                    <del>
                        Rp. 100.000
                    </del>
                </p>

            </div>
            <div class="pay">
                <div class="select">
                    <span>3</span>
                    <img src="./arrow.png" alt="plus">

                </div>
                <div class="button">

                    <p>
                        Pesan
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>