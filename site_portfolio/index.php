<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$count = increment_counter('index');
include __DIR__ . '/includes/header.php';
?>
<section>
  <h1>How can we get children to put down their phones for a while and read?</h1>
  <h2>The challenge of our time</h2>
  <p>Children grow up surrounded by notifications, videos and games. How can we help them focus on reading and imagination again?</p>

  <h3>5 ideas that can help</h3>
  <ul>
    <li>Set a “no-screen hour” every afternoon.</li>
    <li>Turn reading into a game or family ritual.</li>
    <li>Spend time outdoors, without phones or tablets.</li>
    <li>Encourage creative activities — drawing, music, crafts.</li>
    <li>Parents set the example — they put their phones away too.</li>
  </ul>

  <section class="portfolio-section">
  <h2>Portfolio</h2>
  <div class="project-buttons">
    <a href="#" class="project-btn">
      <strong>Educational Web Concept</strong><br>
      A page encouraging reading through storytelling.
    </a>
    <a href="#" class="project-btn">
      <strong>AI Assistant for Students</strong><br>
      A chatbot to help students organize their study time.
    </a>
  </div>
</section>

  <p style="margin-top:20px;color:#667;">Page views: <?php echo htmlspecialchars($count); ?></p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
