<ul class="tags">
  <li>
  <?php $tags = []; ?>
    <?php foreach ($articles as $tag): ?>
      <?php array_push($tags, $tag->tags()); ?>
    <?php endforeach ?>
    <?php $uniqueTags = array_unique($tags); ?>
    <?php foreach ($uniqueTags as $tag): ?>
      <button class="btn" onclick="filterSelection('<?php echo $tag->tags() ?>')"> 
        <?php echo $tag->tags() ?>
      </button>
    <?php endforeach ?>
  </li>
</ul>