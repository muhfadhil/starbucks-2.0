<?php
session_start();

require "../handlers/functions.php";

if (!isset($_SESSION["login"])) {
  header("Location: ../index.php");
  exit;
}

$_SESSION = [];
session_unset();
session_destroy();

alert_redirect("Berhasil logout!", "../index.php");
