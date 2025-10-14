<?php
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/counter.php';
$count = increment_counter('index');
include __DIR__ . '/includes/header.php';
?>
<section>
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

  <h3>Portfolio</h3>
  <div class="projects">
    <div class="project-card"><h4>Educational Web Concept</h4><p>A page encouraging reading through storytelling.</p></div>
    <div class="project-card"><h4>AI Assistant for Students</h4><p>A chatbot to help students organize their study time.</p></div>
  </div>

  <p style="margin-top:20px;color:#666">Page views: <?php echo htmlspecialchars($count); ?></p>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>