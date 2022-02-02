<main class="main">
  <div class="container">
    <?php
    // stampa delle cards
    include __DIR__ . './cards.php';
    echo '<section class="card">';
    echo '<img src='. $a['img_path'] . '>';
    echo '<h2>' . $a['title'] . '</h2>';
    echo '<span>' . $a['author'] . '</span>';
    echo '<span>' . $a['year'] . '</span>';
    echo '</section>';
    ?>
  </div>
</main>