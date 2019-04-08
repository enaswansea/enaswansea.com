<?php snippet('header') ?>

<?php 

//$artworks = $page->text();

?>


  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
    </header>
    
    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>
      
    </div>
    
  </main>

<?php snippet('footer') ?>
