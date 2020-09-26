<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/css/index.css') ?>
</head>
<body>
    <header class="header-home">
        <a href="<?= $site->url() ?>">
            <img class="logo-home" src="<?= url('assets/images/ub-logo.png') ?>" alt="">
        </a>
    
        <nav class="menu-home">
          <?php foreach ($site->children()->listed() as $subpage): ?>
            <li class="menu-item">
              <a href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
            </li>
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

</body>
</html>