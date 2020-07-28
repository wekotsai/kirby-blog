<ul class="blog">
    <?php foreach ($blog as $project): ?>
    <li>
        <a href="<?= $project->url() ?>">
            <?= $project->image()->crop(500) ?>
            <?= $project->title() ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>