<!DOCTYPE html>
<html>
<head>
    <title>Proses Pemesanan</title>
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
        <h1>Proses Pemesanan</h1>

       <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = mysqli_connect("localhost", "root", "" , "order");

        $nama_kos = $_POST["nama_kos"];
        $lokasi = $_POST["lokasi"];
        $harga = $_POST["harga"];
        $fasilitas = $_POST["fasilitas"];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $telepon = $_POST["telepon"];

        echo "<h2>Informasi Pemesanan</h2>";
        echo "<p>Nama Kost&nbsp&nbsp&nbsp: " . $nama_kos . "</p>";
        echo "<p>Lokasi&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $lokasi . "</p>";
        echo "<p>Harga&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Rp " . number_format($harga, 0, ',', '.') . "</p>";
        echo "<p>Fasilitas&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $fasilitas . "</p>";
        echo "<br>";
        echo "<h2>Informasi Pemesan</h2>";
        echo "<p>Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $nama . "</p>";
        echo "<p>Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $email . "</p>";
        echo "<p>Telepon&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " . $telepon . "</p>";

        $query = "INSERT INTO `order` VALUES ('$nama_kos','$lokasi','$harga','$fasilitas','$nama','$email','$telepon')";

        mysqli_query($con, $query);

        // Proses penyimpanan data pemesanan ke database atau sistem lainnya
        // Anda dapat menambahkan kode untuk menyimpan data ke database di sini

        echo "<p>Pemesanan berhasil! Terima kasih telah memesan kos-kosan.</p>";
    } else {
        echo "<p>Halaman ini tidak dapat diakses secara langsung.</p>";
    }
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
