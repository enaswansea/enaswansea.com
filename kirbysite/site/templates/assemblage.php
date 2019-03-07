<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->year() ?>
      </div>
    </header>
    
    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>

      <?php /* images need to be explicitly inserted into the page
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          <div class="caption"><?= $image->caption() ?></div>
        </figure>
      <?php endforeach */ ?>
      
    </div>
    
  </main>

<?php snippet('footer') ?>
