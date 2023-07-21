<?php
require 'config.php';
    if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $duplicate = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Username or Email Has Already Taken'); </scipt>";
        }
        else{
            if($password == $confirmpassword){
                $query = "INSERT INTO tbl_users VALUES('$fullname', '$username', '$email', '$password')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successfull')</script>";
            }
            else{
                echo
                "<script> alert('Password Does Not Match') </script>";
            }
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

    <title>registerAmoment</title>
  </head>
  <body>
    <section class="container forms">
      <div class="form login">
        <div class="form-content">
          <h1>DAFTAR</h1>

          <form class="" action="formRegister.php" method="post" autocomplete="off">  
            <div class="field input-field">
                <input type="text" name="fullname" placeholder="Full name" class="input" />
            </div>

            <div class="field input-field">
              <input type="text" name="username" placeholder="Username" class="input" />
            </div>

            <div class="field input-field">
              <input type="text" name="email" placeholder="Email" class="input" />
            </div>

            <div class="field input-field">
              <input type="password" name="password" placeholder="Password" class="password" />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            
            <div class="field input-field">
              <input type="password" name="confirmpassword" placeholder="Confirm Password" class="password" />
              <i class="bx bx-hide eye-icon"></i>
            </div>

            <a href="formLogin.php">
              <div class="field button-field">
                <button type="submit" name="submit">Daftar Akun</button>
              </div>
            </a>

            <div class="form-link">
              <span
                >Sudah punya akun ?
                <a href="formLogin.php"><b>Login</b></a>
              </span>
            </div>

          </form>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="js/login_register.js"></script>

  </body>
</html>
