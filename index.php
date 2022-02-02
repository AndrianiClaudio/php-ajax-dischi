<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- axios cdn -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <!-- vue cdn -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
  <div id="app">
    <?php
      // includi header.php
      include __DIR__ . '/partials/template/header.php';
      // includi main.php
      include __DIR__ . '/partials/template/main.php';
      ?>
  </div>
  <script src="./js/script.js"></script>
</body>
</html>
