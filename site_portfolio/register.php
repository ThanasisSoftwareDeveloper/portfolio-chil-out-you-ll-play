<?php
// register.php
require_once __DIR__ . '/includes/config.php';

// basic validation
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /login.php');
  exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (!$username || !$password) {
  die('Please provide username and password');
}

// hash password
$hash = password_hash($password, PASSWORD_DEFAULT);

// insert with prepared statement
try {
  $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :pass)");
  $stmt->execute([':username'=>$username, ':pass'=>$hash]);
  // auto-login after register
  session_start();
  $_SESSION['user_id'] = $pdo->lastInsertId();
  $_SESSION['username'] = $username;
  header('Location: /index.php');
  exit;
} catch (PDOException $e) {
  if ($e->getCode() == 23000) { // duplicate
    die('Username already exists. <a href="/login.php">Go back</a>');
  } else {
    die('Error: ' . $e->getMessage());
  }
}