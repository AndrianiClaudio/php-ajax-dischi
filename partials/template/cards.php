<?php
// includi db contenente le informazioni necessarie alla stampa delle card
include __DIR__ . '/../../server/db.php';
?>
  <?php
  foreach ($album as $id => $a) {
    echo '<section class="card">';
      echo '<img src='. $a['img_path'] . '>';
      echo '<h2>' . $a['title'] . '</h2>';
      echo '<span>' . $a['author'] . '</span>';
      echo '<span>' . $a['year'] . '</span>';
    echo '</section>';
  }
  ?>
</section>
