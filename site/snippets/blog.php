<ul class="blog">
  <?php foreach ($blog as $project): ?>
    <li>
      <a href="<?= $project->url() ?>">
        <?php if ($project->image()): ?>
          <?= $project->image()->crop(500) ?>
        <?php endif ?>
        <?= $project->title() ?>
      </a> 
    </li>
  <?php endforeach ?>
</ul>