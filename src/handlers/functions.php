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


function addUser($data_dir, $user, $pass)
{
  $file = fopen($data_dir, "a");
  $user = anti_injection($user);

  $newUser = "{$user},{$pass}\n";
  fwrite($file, $newUser);
  fclose($file);
}
