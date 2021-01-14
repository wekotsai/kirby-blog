<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto&display=swap" rel="stylesheet">
    <?= css(['assets/css/index.css', 'assets/css/prism.css',]) ?>
    
</head>
<body>  
  <header>
    <a class="logo" href="<?= $site->url() ?>">
      <span class="logo-home">uber <br> berliner</span>
    </a>
    <nav class="nav" role="navigation">
      <input class="menu__checkbox" type="checkbox" role="Menu" aria-label="Menu" aria-controls="navigation" aria-haspopup="true" id="menu">
      <label class="menu__icon" for="menu"><span class="hamburger"></span></label>
        <ul class="menu" role="menuitem">
          <li>
            <?php foreach ($site->children()->listed() as $subpage): ?>
              <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
            <?php endforeach ?>
          </li>  
        </ul>
    </nav>   
  </header>

  <h1>
    <?php 
      if ($page->template() != 'home') {
        echo $page->title();
      }
    ?>
  </h1>

<?= js(['assets/js/index.js', 'assets/js/prism.js',]) ?>
</body>
</html>