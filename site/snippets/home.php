<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">

    <?= css('assets/css/index.css') ?>
</head>
<body>
  <section class="wrapper">
    <span class="title">uber berliner</span>
    <nav class="menu-home">
      <?php foreach ($site->children()->listed() as $subpage): ?>
        <li class="menu-item">
          <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
        </li>
      <?php endforeach ?>
    </nav>
  </section>
</body>
</html>