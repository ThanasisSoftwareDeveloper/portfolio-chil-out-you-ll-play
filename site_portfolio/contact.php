<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$visitor_count = increment_site_counter();
$page_views = increment_counter('contact');
include __DIR__ . '/includes/header.php';
?>
<section>
  <h2>Contact</h2>
  <p>Send me a message</p>

  <!-- Παραμένει FormSubmit ή αν θες PHP mail, το αντικαθιστούμε -->
  <form action="https://formsubmit.co/your@email.com" method="POST">
    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Message</label>
    <textarea name="message" rows="6" required></textarea>

    <button type="submit">Send</button>
  </form>

  <p style="margin-top:20px;color:#665">Page views: <?php echo htmlspecialchars((string) $page_views); ?></p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
