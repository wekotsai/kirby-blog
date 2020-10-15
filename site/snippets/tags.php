<ul class="tags">
  <?php $tags = []; ?>
    <a href="/blog" class="btn">All</a>
    <?php foreach ($articles as $tag): ?>
      <?php array_push($tags, $tag->tags()); ?>
    <?php endforeach ?>
    <?php $uniqueTags = array_unique($tags); ?>
    <?php foreach ($uniqueTags as $tag): ?>
    <li class="btn">
      <a href="/blog/category:<?php echo $tag->tags()?>"> 
        <?php echo $tag->tags() ?>
      </a>
    <?php endforeach ?>
  </li>
</ul>