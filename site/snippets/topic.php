<?php snippet('header')?>

<main class="magazine">
  <?php 
    $articles = $page->siblings()->children()->filterBy('template', 'post');
    $articles = $articles->filterBy('topics', $page->slug(), ',');
  ?>
  <?php snippet('blog', ['articles' => $articles]) ?>
</main>

<?php snippet('footer')?>