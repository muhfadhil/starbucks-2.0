<?php
session_start();
require "../handlers/functions.php";

if (isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

if (isset($_POST["submit"])) {
  $data_dir = "../DATA/user.txt";
  loginUser($data_dir, $_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/style/style.css" />
  <link rel="stylesheet" href="../assets/style/loginSystem.css">
  <title>Login</title>
</head>

<body>
  <header>
    <section class="top-bar"></section>
    <section class="header">
      <div class="profil">
        <img class="logo" src="../img/logo.png" alt="Logo Starbucks" width="60" />
        <h1>Starbucks</h1>
      </div>
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="./ChooseTable.php">Menu</a></li>
          <li><a href="./Location.php">Location</a></li>
          <li><a href="./AboutUs.php">About Us</a></li>
        </ul>
      </nav>
    </section>
  </header>

  <main>
    <div class="container">
      <div class="title">
        <h1>Login</h1>
      </div>
      <div class="form-registrasi">
        <form action="" method="post">
          <div class="input-group">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" autocomplete="off">
          </div>
          <div class="input-group">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
          </div>
          <button id="login-btn" type="submit" name="submit">login</button>
          <p>Belum punya akun? <a href="./Registrasi.php">Sign Up!</a></p>
        </form>
      </div>
    </div>

  </main>

  <footer>
    <section class="footer">
      <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="./ChooseTable.php">Menu</a></li>
        <li><a href="./Location.php">Location</a></li>
        <li><a href="./AboutUs.php">About Us</a></li>
      </ul>
    </section>
    <p>
      &copy; 2022 Amanda Marella Tifadi | Fariel Ahmad Sudrajat | Layla Indah
      Pradita | Muhammad Fadhil | Muhammad Ra'id Fathin Syah | Nur Aziz Ary
      Setiawan
    </p>
  </footer>
</body>

</html>