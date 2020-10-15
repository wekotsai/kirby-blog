<ul class="blog">
  <?php if (param('category')) { ?>
    <?php $filteredTags = $articles->filterby('tags', param('category')); ?>
    <?php foreach ($filteredTags as $article): ?>
      <li class="blog-post">
        <a href="<?= $article->url() ?>">
          <?php if ($article->image()): ?>
            <?= $article->image()->crop(500) ?>
          <?php endif ?>
          <p class="blog-title"><?= $article->title() ?></p>
        </a> 
      </li>
    <?php endforeach ?>
      <?php } else { ?>
        <?php foreach ($articles as $article): ?>
        <li class="blog-post">
          <a href="<?= $article->url() ?>">
            <?php if ($article->image()): ?>
              <?= $article->image()->crop(500) ?>
            <?php endif ?>
            <p class="blog-title"><?= $article->title() ?></p>
          </a> 
        </li>
    <?php endforeach ?>
  <?php }; ?>
</ul>