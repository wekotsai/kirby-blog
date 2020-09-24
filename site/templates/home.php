<?php snippet('header') ?>
    
    <img class="homeImg" src="<?= url('assets/images/hot-air-balloons.jpg') ?>" alt="">
    
<?php snippet('blog', [
    'blog' => page('blog')
        ->children()
        ->limit(3)    
]) ?>  

<?php snippet('footer') ?>