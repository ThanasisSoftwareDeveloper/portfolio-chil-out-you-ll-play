<?php
// includes/footer.php
include_once 'counter.php';
$footerCount = isset($visitor_count) ? (int) $visitor_count : get_site_counter();
?>
  </main>

  <footer class="site-footer">
    <span class="footer-counter">Page views: <?= htmlspecialchars((string) $footerCount) ?></span>
    <span class="footer-copy">© 2025 Created by Thanasis Koufos</span>
  </footer>
</body>
</html>

