<?php
// includes/config.php
// Database connection settings

define('DB_DRIVER', 'mysql'); // 'mysql' or 'sqlite'
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio_db'); // match your phpMyAdmin database
define('DB_USER', 'root');
define('DB_PASS', ''); // or `` if there is not any MySQL password

// Optional: switch to SQLite for a very lightweight setup
// define('DB_DRIVER', 'sqlite');
// define('DB_PATH', __DIR__ . '/../data/site_db.sqlite');

$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
  if (DB_DRIVER === 'sqlite') {
    $pdo = new PDO ('sqlite:' . DB_PATH, null, null, $options);
  } else {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
  }
} catch (PDOException $e) {
  die("DB Connection failed: " . $e->getMessage());
}
?>
}
