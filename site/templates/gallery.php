<?php snippet('header', ['selectedartwork' => true]) ?>

<?php 

    $artworks = $page->children()
                 ->sortBy('date')
                 ->visible()
                 ->flip(); 

    if($tag = param('tag')) {
      $artworks = $artworks ->filterBy('tags', $tag, ',');
    }

    if($tag = param('selected')) {
        $artworks = $artworks->filterBy('Selected', 'true');
    } 

 
    if($tag = param('year')) {
        $thisyear = param('year');

        $artworks = $artworks->filter(function($child) {
            return $child->artwork_year() == param('year');
        });
    } 

    if($tag = param('selected-works')) {
        $thisyear = param('year');

        $artworks = $artworks->filter(function($child) {
            return $child->artwork_year() == param('year');
        });
    } 

    if(sizeof(params()) == 0) {
        // by default....
//        $artworks = new Collection(); // show nothing
        $artworks = $artworks->filterBy('Selected', 'true'); // show selected
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
                <?= $artwork->artwork_description()->html() ?>
            </div>

          </div >

        <?php endforeach ?>
      <?php endif ?>
    </section>


  </main>

<?php snippet('footer') ?>
