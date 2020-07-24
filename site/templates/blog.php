<?php snippet('header') ?>
    
<ul>
    <?php foreach ($page->children() as $project): ?>
    <li>
        <a href="<?= $project->url() ?>">
            <?= $project->title() ?>
        </a>
    </li>
    <?php endforeach ?>
</ul>

<?php snippet('footer') ?>