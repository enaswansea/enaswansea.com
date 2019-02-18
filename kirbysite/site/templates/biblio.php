<?php snippet('header') ?>
<?php
$biblio = page('biblio')->children()->visible();
?>

  <main class="main" role="main">

    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>
    </div>


<ul class="showcase grid gutter-1">

  <?php foreach($biblio as $article): ?>

    <div class="showcase-item column">
        <a href="<?= $article->url() ?>" class="showcase-link">
          <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $article->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-summary"><?= $article->summary()->html() ?></div>
        </a>
    </div>

  <?php endforeach ?>

</ul>
      
  </main>

<?php snippet('footer') ?>
