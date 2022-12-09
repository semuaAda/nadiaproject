<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembeli</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <i>LOGO</i>
        <h1>KOPERASI SEKOLAH</h1>
        <a href="#">Logout</a>
    </nav>
    <nav class="sidebar">
        <img src="cantik.jpg" alt="">

        <ul>
            <h3>DASHBOARD</h3>
            <a href="dashboard.php">
                <li>Dasboard</li>
            </a>
            <h3>MASTER DATA</h3>
            <a href="pembeli.php">
                <li>Pembeli</li>
            </a>
            <a href="kategori.php">
                <li>Kategori</li>
            </a>
            <a href="barang.php">
                <li>Barang</li>
            </a>
            <a href="data-nasabah.php">
                <li>Tabungan</li>
            </a>
            <h3>TRANSAKSI</h3>
            <a href="penjualan.php">
                <li>Penjualan</li>
            </a>
            <a href="transaksi-tabungan.php">
                <li>Trans Tabungan</li>
            </a>
            <h3>LAPORAN</h3>
            <a href="laporan-penjualan.php">
                <li>Lap Penjualan</li>
            </a>
            <a href="">
                <li>Pembukuan</li>
            </a>
        </ul>
    </nav>

    <section class="content">
        <h2>PEMBELI</h2>
        <hr>
        <div class="form-kategori"> 
            <form action="" method="post">
                <input type="text" placeholder="Masukan Kategori">
                <button type="submit" name="submit">+ Insert Data</button>
            </form>
        </div>
        <div class="form-search">
            <form action="" method="post">
                <Label for="cari">Search :</Label>
                <input type="text" name="cari" id="cari">
            </form>
        </div>
        <div class="table-buy">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Id Pembeli</th>
                    <th>Nama Pembeli</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>200631100126</td>
                    <td>Sugiono chan</td>
                    <td id="keterangan">-</td>
                    <td id="aksi"><a href="" class="a-yellow">Edit</a> | <a href="" class="a-red">Hapus</a></td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>