<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$visitor_count = increment_site_counter();
$page_views = increment_counter('donate');
include __DIR__ . '/includes/header.php';
?>
<section>
  <h2>Support this project 💖</h2>
  <p>If you liked this project, you can make a small donation:</p>

  <div class="donate-options">
    <a class="paypal" href="https://www.paypal.com/donate" target="_blank">PayPal</a>

    <!-- Bitcoin button triggers reveal -->
    <button id="show-btc" class="bitcoin" style="background:#f7931a;color:white;border:none;padding:12px 20px;border-radius:6px;cursor:pointer;">
      Bitcoin
    </button>
  </div>

  <!-- Hidden area that shows the address and copy -->
  <div id="btc-addr" style="display:none;margin-top:20px;text-align:center;">
    <p id="btc-addr-text" style="font-family:monospace;">bc1qyfgglnkdvgs3rjpmtmhhhc456p4sm9dkj63pjp</p>
    <button id="copy-btc" style="margin-top:8px;padding:8px 12px;border-radius:6px;">Copy address</button>
  </div>

  <p style="margin-top:20px;color:#666">Page views: <?php echo htmlspecialchars((string) $page_views); ?></p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
