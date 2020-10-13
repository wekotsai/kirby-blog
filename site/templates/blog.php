<?php snippet('header') ?>

<?php snippet('tags', ['articles' => $page->children() ]) ?>
    
<?php snippet('blog', ['articles' => $page->children() ]) ?>  

<?php snippet('footer') ?>