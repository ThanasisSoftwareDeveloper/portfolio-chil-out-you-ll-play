<?php
// login_process.php
require_once __DIR__ . '/includes/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: /login.php');
  exit;
}

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if (!$username || !$password) {
  die('Provide credentials');
}

// fetch user
$stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = :username");
$stmt->execute([':username'=>$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
  // success
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['username'] = $username;
  header('Location: /index.php');
  exit;
} else {
  die('Invalid credentials. <a href="/login.php">Back</a>');
}