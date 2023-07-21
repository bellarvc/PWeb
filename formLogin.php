<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    $query_sql = "SELECT * FROM tbl_users
                  WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: index.php");
        exit;
    } else {
        echo "<center><h1>Username atau Password Anda Salah. Silakan Coba Login Kembali.</h1>
              <button><strong><a href='formLogin.php'>Login</a></strong></button></center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- my style -->
    <link rel="stylesheet" href="css/loginregisterStyle.css" />

    <!-- Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <title>loginAmoment</title>
  </head>
  <body>
    <section class="container forms">
      <div class="form login">
        <div class="form-content">
          <h1>LOGIN</h1>

          <form action="formLogin.php" method="post">
            <div class="field input-field">
              <input type="text" name="username" placeholder="Username" class="input" />
            </div>

            <div class="field input-field">
              <input type="password" name="password" placeholder="Password" class="password" />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <a href="index.php">
              <div class="field button-field">
                <button>Login</button>
              </div>
            </a>

            <div class="form-link">
              <span
                >Belum punya akun ?
                <a href="formRegister.php"><b>Daftar disini</b></a>
              </span>
            </div>
          </form>
        </div>
    </section>
     <!-- JavaScript -->
     <script src="js/login_register.js"></script>
  </body>
</html>
