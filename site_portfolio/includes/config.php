<?php
// includes/config.php
// Edit these values for MySQL:
define('DB_DRIVER', 'mysql'); // 'mysql' ή 'sqlite'
define('DB_HOST', 'localhost');
define('DB_NAME', 'site_db');
define('DB_USER', 'site_user');
define('DB_PASS', 'strongpassword');

// If you prefer SQLite (ελαφρύ, single-file) use:
// define('DB_DRIVER', 'sqlite');
// define('DB_PATH', __DIR__ . '/../data/site_db.sqlite');

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  if (DB_DRIVER === 'sqlite') {
    $pdo = new PDO('sqlite:' . DB_PATH, null, null, $options);
  } else {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
  }
} catch (PDOException $e) {
  // Σφάλμα σύνδεσης — για production, μην εμφανίζεις το μήνυμα στο κοινό
  die("DB Connection failed: " . $e->getMessage());
}