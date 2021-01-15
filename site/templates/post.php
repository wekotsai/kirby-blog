<?php snippet('header') ?>
<nav class="breadcrumb" aria-label="breadcrumb">
  <?php foreach($site->breadcrumb() as $crumb): ?>
    <p>
      <a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
        <?= html($crumb->title()) ?>
      </a>
    </p>
  <?php endforeach ?>
</nav>

<div class="post">
  <?= $page->text()->kt() ?>
  <ul class="gallery">
  <?php $parent = $page->parent()->slug() ?>
    <?php if($parent !== 'tech'): ?>
      <?php foreach ($page->images() as $image): ?>
        <li>
          <a href="<?= $image->url() ?>">
            <?= $image->resize(800) ?>
          </a>
        </li>
      <?php endforeach ?>
    <? endif ?>
  </ul>
</div>
<?php snippet('footer') ?>