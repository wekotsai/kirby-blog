<footer class="footer">
  <div class="socialmedia">  
    <?php foreach ($site->socialmedia()->toStructure() as $link) : ?>
      <a href="<?php echo $link->url() ?>" aria-label="<?php echo $link->title() ?>" title="<?php echo $link->title() ?>" 
      <?php echo preg_match('/^http/', $link->url()) ? 'target="_blank" rel="noopener"' : '' ?>
        >
        <img src="<?php echo $link->icon()->toFile()->url() ?>">
      </a>
    <?php endforeach ?>
  </div>
  <p class="copyright"><?php echo $site->footercopyright() ?></p>
</footer>

</body>
</html>