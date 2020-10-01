<ul class="blog">
  <?php foreach ($blog as $project): ?>
    <li class="blog-post">
      <a href="<?= $project->url() ?>">
        <?php if ($project->image()): ?>
          <?= $project->image()->crop(500) ?>
        <?php endif ?>
        <p class="blog-title"><?= $project->title() ?></p>
      </a> 
    </li>
  <?php endforeach ?>
</ul>