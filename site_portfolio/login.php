<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$count = increment_counter('login');
include __DIR__ . '/includes/header.php';
?>
<section>
  <div style="display:flex;gap:20px;flex-wrap:wrap;">
    <div style="flex:1;min-width:280px;">
      <h3>Login</h3>
      <form method="POST" action="/login_process.php">
        <input type="email" name="username" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>

    <div style="flex:1;min-width:280px;">
      <h3>Sign Up</h3>
      <form method="POST" action="/register.php">
        <input type="text" name="username" placeholder="Username or Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Create Account</button>
      </form>
    </div>
  </div>

  <p style="margin-top:20px;color:#666">Page views: <?php echo htmlspecialchars($count); ?></p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>