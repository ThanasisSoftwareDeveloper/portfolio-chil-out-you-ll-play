<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/counter.php';

// Function to get total visitors (sum of all pages)
function get_total_visitors($pdo) {
  $stmt = $pdo->query("SELECT SUM(visits) AS total FROM visits");
  $row = $stmt->fetch();
  return $row ? $row['total'] : 0;
}

$total_visitors = get_total_visitors($pdo);
?>

<footer style="position:fixed; bottom:0; width:100%; text-align:center; background:#111; color:#fff; padding:10px 0;">
  <p>© 2025 Created by Thanasis Koufos — Visitors: <?= htmlspecialchars($total_visitors) ?></p>
</footer>

<!-- ✅ Burger Menu Script -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector(".menu-toggle");
    const links = document.querySelector(".nav-links");
    if (toggle && links) {
      toggle.addEventListener("click", () => {
        links.classList.toggle("active");
      });
    }
  });
</script>
</body>
</html>
