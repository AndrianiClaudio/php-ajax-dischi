<?php
// includi db contenente le informazioni necessarie alla stampa delle card
include __DIR__ . '/../../server/db.php';
?>
  <?php
  foreach ($album as $a) {
    echo '<section class="card">';
    //card info
      echo '<img src='. $a['img_path'] . '>';
      echo '<h2>' . $a['title'] . '</h2>';
      echo '<span>' . $a['author'] . '</span>';
      echo '<span>' . $a['year'] . '</span>';
      // FINE card-info
    echo '</section>';
  }
  ?>
</section>
