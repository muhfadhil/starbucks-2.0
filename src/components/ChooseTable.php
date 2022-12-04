<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/style/style.css" />
  <link rel="stylesheet" href="../assets/style/chooseTable.css">
  <title>Menu - Starbucks</title>
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
    <section class="content">
      <h1>Pilih Menu Starbucks</h1>
    </section>

    <aside>
      <div class="apply-form">
        <form action="./Menu.php" method="POST">
          <select name="tables" id="tables">
            <option value="pilih_menu">--Pilih Menu---</option>
            <option value="frappuccino">Frappuccino Blended Beverages</option>
            <option value="chocolate_teavana">Chocolate & Teavana</option>
            <option value="espresso_brewed_coffee">Espresso & Brewed Coffee</option>
          </select>
          <button disabled type="submit" name="apply" id="apply-button">Apply</button>
        </form>
      </div>
      <div class="logo-form">
        <img src="../img/wordmark_footer.png" alt="Logo Form" width="15">
      </div>
    </aside>
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
  <script src="../handlers/script/script.js"></script>
</body>

</html>