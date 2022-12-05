<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "starbucks_menu";

$conn = mysqli_connect($hostname, $username, $password, $db);


function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function anti_injection($data)
{
  global $conn;
  $filter = mysqli_real_escape_string($conn, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
  return $filter;
}


function addUser($data_dir, $data)
{
  // cek apakah konfirmasi password sama dengan password
  if ($data["password"] !== $data["password-confirm"]) {
    alert_redirect("Konfirmasi password tidak sama!", "./Registrasi.php");
    exit;
  }

  $file = fopen($data_dir, "a");
  $user = anti_injection($data["username"]);
  $pass = $data["password"];

  $newUser = "{$user},{$pass}\n";
  fwrite($file, $newUser);
  fclose($file);
}


function loginUser($data_dir, $data)
{
  $file = fopen($data_dir, "r");
  $user = $data["username"];
  $pass = $data["password"];

  $userVerified = 0;
  while (!feof($file) && !$userVerified) {
    $line = fgets($file, 255);
    $line = chop($line);
    $field = explode(",", $line, 2);

    if ($user === $field[0]) {
      $userVerified = 1;
      if ($pass === $field[1]) {
        $_SESSION["login"] = true;
        header("Location: ../index.php");
        exit;
      }
    }
  }
}


function alert_redirect(string $msg, string $loc)
{
  echo "
  <script type='text/javascript'>
    alert('$msg');
    document.location.href = '$loc';
  </script>
  ";
}
