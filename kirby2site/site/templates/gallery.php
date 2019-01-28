<?php snippet('header') ?>

<?php 
    $artworks = $page->children()
                 ->sortBy('date')
                 ->visible()
                 ->flip();

    if($tag = param('tag')) {
      $artworks = $artworks ->filterBy('tags', $tag, ',');
    }

if($tag = param('year')) {
    $thisyear = param('year');

    $artworks = $artworks->filter(function($child) {
        return $child->date('Y') === param('year');
    });
} else {
    $artworks = new Collection();
    // show nothing 
}

?>


  <main class="main" role="main">

    <header>
    </header>

    <section>
      <?php if($artworks->count()): ?>
        <?php foreach($artworks as $artwork): ?>

          <div class="artwork index">

            <div class="artwork_image"><?= $artwork->image() ?></div>
            <div class="artwork_text">
                <i><?= $artwork->title()->html() ?></i> | 
                <?= $artwork->text()->html() ?>
            </div>

          </div >

        <?php endforeach ?>
      <?php endif ?>
    </section>


  </main>

<?php snippet('footer') ?>
