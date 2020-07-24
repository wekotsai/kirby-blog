<?php snippet('header') ?>
    
<ul class="blog">
    <?php foreach ($page->children() as $project): ?>
    <li>
        <a href="<?= $project->url() ?>">
            <?= $project->image()->crop(500) ?>
            <?= $project->title() ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<?php snippet('footer') ?>