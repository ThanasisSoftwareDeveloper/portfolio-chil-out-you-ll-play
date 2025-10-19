<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$count = increment_counter('donate');
include __DIR__ . '/includes/header.php';
?>

<section>
  <h2>Support this project 💖</h2>
  <p>If you liked this project, you can make a small donation:</p>

  <div class="donate-options">
    <a class="btn-paypal" href="https://www.paypal.com/" target="_blank">Donate with PayPal</a>

    <!-- Bitcoin button triggers reveal -->
    <button id="show-btc" class="btn-bitcoin">Donate with Bitcoin</button>
  </div>

  <!-- Hidden area that shows the address and copy -->
  <div id="btc-addr" style="display:none;margin-top:20px;text-align:center;">
    <p id="btc-addr-text" style="font-family:monospace;">bc1qyfgglnkdvgs3rjpmtmhhhc456p4sm9dkj63pjp</p>
    <button id="copy-btc" style="margin-top:8px;padding:8px 12px;border-radius:6px;">Copy address</button>
  </div>

  <p style="margin-top:20px;color:#666">Page views: <?php echo htmlspecialchars($count); ?></p>
</section>

<script>
  // Show Bitcoin address
  document.addEventListener("DOMContentLoaded", function () {
    const showBtn = document.getElementById("show-btc");
    const btcBox = document.getElementById("btc-addr");
    const copyBtn = document.getElementById("copy-btc");
    const addr = document.getElementById("btc-addr-text");

    if (showBtn && btcBox) {
      showBtn.addEventListener("click", () => {
        btcBox.style.display = "block";
      });
    }

    if (copyBtn && addr) {
      copyBtn.addEventListener("click", () => {
        navigator.clipboard.writeText(addr.textContent);
        copyBtn.textContent = "Copied!";
        setTimeout(() => copyBtn.textContent = "Copy address", 2000);
      });
    }
  });
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>
