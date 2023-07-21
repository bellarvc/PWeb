<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amoment</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />

    <!-- my style -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
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

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Butuh Kamar ?</h1>
        <p>Temukan kamar impianmu bersama Amoment</p>
        <a href="catalog.php" class="cta">Pesan Kamar</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
      <section id="about" class="about">
      <h2>About <span>Us</span></h2>

      <div class="row">
        <div class="about-img">
          <img src="img/Amoment2.png" alt="About Us" />
        </div>
        <div class="content">
          <h3>Kenapa Harus Amoment ?</h3>
          <p>
            Amoment adalah sebuah website yang menyediakan layanan pemesanan
            kamar kos di daerah Jogja. Website ini dirancang untuk memudahkan
            pengguna dalam mencari dan memesan kamar kos sesuai dengan kebutuhan
            mereka. Amoment menawarkan berbagai pilihan kamar kos yang nyaman,
            aman, dan terjangkau di Jogja.
          </p>
        </div>
      </div>
    </section>

    <!-- About Section end-->

    <!--Payment Method-->
    <div class="slider-area">
      <h2>Payment <span>Method</span></h2>
      <div class="wrapper">
        <div class="item">
          <img src="payment/mandiri.png" alt="" height="99px" width="220px" />
        </div>
        <div class="item">
          <img src="payment/bri.png" alt="" height="85px" width="130px" />
        </div>
        <div class="item">
          <img src="payment/bsi.png" alt="" height="85px" width="130px" />
        </div>
        <div class="item">
          <img src="payment/dana.png" alt="" height="85px" width="220px" />
        </div>
        <div class="item">
          <img src="payment/spay.png" alt="" height="85px" width="220px" />
        </div>
        <div class="item">
          <img src="payment/ovo.png" alt="" height="85px" width="130px" />
        </div>
        <div class="item">
          <img src="payment/gopay.png" alt="" height="85px" width="220px" />
        </div>
      </div>
    </div>
    
    <!--Payment Method end-->

    <h1>GET IN TOUCH</h1>
    <section id="contact-details">
      <div class="details">
        <h2>Visit our location or contact us anytime</h2>
        <br><br><br>
        <h3>Head Office</h3>
        <div>
          <li>
            <i class="fal fa-map"></i>
            <p>Jl. Ringroad Selatan, Kragilan,
              Tamanan, Kec. Banguntapan, Kabupaten Bantul <br>Daerah Istimewa
              Yogyakarta 55191</p>
          </li>
          <li>
            <i class="fal fa-envelope"></i>
            <p>amoment@gmail.com</p>
          </li>
          <li>
            <i class="fal fa-phone"></i>
            <p>+6285924691757</p>
          </li>
          <li>
            <i class="fal fa-clock"></i>
            <p>Monday to Saturday 08:00 - 15:00</p>
          </li>
        </div>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5891294422418!2d110.3831212!3d-7.833234900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5701a2ae1c23%3A0x173dbeeddc56d9e!2sAhmad%20Dahlan%20University%20-%20Campus%204!5e0!3m2!1sen!2sid!4v1688940562048!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
    </section>

    <footer class="section-p1">
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
