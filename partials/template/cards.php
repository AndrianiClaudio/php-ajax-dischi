<?php
// includi db contenente le informazioni necessarie alla stampa delle card
include __DIR__ . '/../../server/db.php';
echo 'in: cards.php';
?>
<div class="cards">
  <section class="card">
    <?php
    foreach ($album as $id => $a) {
      echo '<img src='. $a['img_path'] . '>';
      echo '<h2>' . $a['title'] . '</h2>';
      echo '<div><span>' . $a['author'] . '</span></div>';
      echo '<div><span>' . $a['year'] . '</span></div>';
    }
    ?>
  </section>
</div>
