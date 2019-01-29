<?php snippet('header') ?>
<?php
$biblio = page('biblio')->children()->visible();
?>

  <main class="main" role="main">

<ul class="showcase grid gutter-1">

  <?php foreach($biblio as $article): ?>

    <li class="showcase-item column">
        <a href="<?= $article->url() ?>" class="showcase-link">
          <?php if($image = $article->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $article->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $article->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
      
  </main>

<?php snippet('footer') ?>
