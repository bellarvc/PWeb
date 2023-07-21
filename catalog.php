<!DOCTYPE html>
<html>
<head>
    <title>Catalog</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <link rel="stylesheet" type="text/css" href="css/catalog.css">
</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="index.php" class="navbar-logo">Amoment</a>
  
      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="catalog.php">Catalog</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="formLogin.php" id="Login"><i data-feather="log-in"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>

    </nav>

    <!-- Navbar end -->

    <div class="container">
        <h1>Katalog Kos-Kosan</h1>
        <form method="get" action="catalog.php">
            <label for="lokasi">Cari Kos-Kosan berdasarkan Lokasi:</label>
            <select name="lokasi" id="lokasi">
                <option value="">Semua Lokasi</option>
                <option value="Sleman">Sleman</option>
                <option value="Bantul">Bantul</option>
                <option value="Yogyakarta">Yogyakarta</option>
            </select>
            <button type="submit">Cari</button>
        </form>

        <?php
        // Data kos-kosan
        $kosan = array(
            array(
                "nama_kos" => "Kost Singgahsini Griya Tawang Sari",
                "lokasi" => "Sleman",
                "harga" => 1600000,
                "fasilitas" => "Meja, Lemari, Kasur, AC, Kamar mandi dalam, Free Wi-Fi",
                "gambar" => "putra.jpg",
                "jenis" => "Khusus Putra"
            ),
            array(
                "nama_kos" => "Kos De Terban",
                "lokasi" => "Bantul",
                "harga" => 1850000,
                "fasilitas" => "Meja, Lemari, Kasur, AC, Kamar mandi dalam, Free Wi-Fi",
                "gambar" => "putri.jpg",
                "jenis" => "Khusus Putri"
            ),
            array(
                "nama_kos" => "Kos Green Belt Tajem",
                "lokasi" => "Yogyakarta",
                "harga" => 1900000,
                "fasilitas" => "Meja, Lemari, Kasur, AC, Kamar mandi dalam, Free Wi-Fi",
                "gambar" => "campur.jpg",
                "jenis" => "Campur"
            )
        );

        // Mengecek apakah ada parameter lokasi yang dikirimkan
        $lokasi = isset($_GET['lokasi']) ? $_GET['lokasi'] : '';

        // Menampilkan data kos-kosan berdasarkan lokasi
        echo "<ul>";
        foreach ($kosan as $data) {
            if ($lokasi == '' || $lokasi == $data["lokasi"]) {
                echo '<div class="pro">';
                echo "<img src='img/" . $data["gambar"] . "' alt='Gambar Kos-Kosan'>";
                echo '<div class="item-content">';
                echo "<h3>" . $data["nama_kos"] . "</h3>";
                echo "<br>";
                echo "<p>Lokasi&nbsp&nbsp&nbsp&nbsp: " . $data["lokasi"] . "</p>";
                echo "<p>Jenis&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $data["jenis"] . "</p>";
                echo "<p>Harga&nbsp&nbsp&nbsp&nbsp: Rp " . number_format($data["harga"], 0, ',', '.') . "</p>";
                echo "<p>Fasilitas&nbsp: " . $data["fasilitas"] . "</p>";
                echo '<form method="post" action="pesan.php">';
                echo '<input type="hidden" name="nama_kos" value="' . $data["nama_kos"] . '">';
                echo '<input type="hidden" name="lokasi" value="' . $data["lokasi"] . '">';
                echo '<input type="hidden" name="harga" value="' . $data["harga"] . '">';
                echo '<input type="hidden" name="fasilitas" value="' . $data["fasilitas"] . '">';
                echo '<button type="submit">Pesan</button>';
                echo '</form>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo "</ul>";
        ?>
    </div>
    <footer>
      <div class="add">
        <p>
          <strong>Address</strong> <br>
          Jl. Ringroad Selatan, Kragilan,
          Tamanan, Kec. Banguntapan, Kabupaten Bantul <br>Daerah Istimewa
          Yogyakarta 55191
        </p>
        <br>
        <p>
          <strong>Hours</strong> <br> 08:00 -
          15:00, Mon - Sat
        </p>
      </div>
      
      <div class="hours">
        <p>
          <strong>Phone</strong> <br> +6285924691757
        </p>
        <br>
        <h4>Follow Us</h4>
          <div class="follow">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </footer>

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>
</html>
