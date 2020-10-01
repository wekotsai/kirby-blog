<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">

    <?= css('assets/css/index.css') ?>
</head>
<body>  
  <header>
    <a class="logo" href="<?= $site->url() ?>">
      <span class="logo-home">uber <br> berliner</span>
    </a>

    <nav class="menu" role="navigation">
          <?php foreach ($site->children()->listed() as $subpage): ?>
            <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
          <?php endforeach ?>
    </nav>
  </header>

  <h1>
    <?php 
      if ($page->template() != 'home') {
        echo $page->title();
      }
    ?>
  </h1>

<script src="assets/js/index.js"></script>
</body>
</html>