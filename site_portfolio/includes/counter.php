<?php
// includes/counter.php
require_once __DIR__ . '/config.php';

/**
 * Increment page counter by 1 and return new value.
 * $page = string id (e.g. 'index', 'contact' ...)
 */
function increment_counter($page) {
  global $pdo;
  // upsert logic
  if (DB_DRIVER === 'sqlite') {
    // SQLite upsert:
    $stmt = $pdo->prepare("INSERT INTO counters(page,cnt) VALUES(:page,1) ON CONFLICT(page) DO UPDATE SET cnt = cnt + 1");
    $stmt->execute([':page'=>$page]);
    $stmt = $pdo->prepare("SELECT cnt FROM counters WHERE page = :page");
    $stmt->execute([':page'=>$page]);
    return (int)$stmt->fetchColumn();
  } else {
    // MySQL upsert:
    $stmt = $pdo->prepare("INSERT INTO counters (page,cnt) VALUES (:page,1) ON DUPLICATE KEY UPDATE cnt = cnt + 1");
    $stmt->execute([':page'=>$page]);
    $stmt = $pdo->prepare("SELECT cnt FROM counters WHERE page = :page");
    $stmt->execute([':page'=>$page]);
    return (int)$stmt->fetchColumn();
  }
}

function get_counter($page) {
  global $pdo;
  $stmt = $pdo->prepare("SELECT cnt FROM counters WHERE page = :page");
  $stmt->execute([':page'=>$page]);
  $res = $stmt->fetchColumn();
  return $res ? (int)$res : 0;
}
