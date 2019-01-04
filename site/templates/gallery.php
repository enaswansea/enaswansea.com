<?php snippet('header') ?>


  <?php 
$artworks = $page->children()
                 ->sortBy('date', 'desc');
                 ->visible()
                 ->flip();

    if($tag = param('tag')) {
      $artworks = $artworks ->filterBy('tags', $tag, ',');
    }

if($tag = param('year')) {
    $artworks = $artworks->filter(function($child) {
            return $child->date('Y') === param('year');
    });
}

?>

<?php
//$years = page('gallery')->children()->groupBy('date');
$years = page('gallery')->children()->pluck('date');
print_r($years);
$years = array_map(function($item) {
  return date('Y', $item);
}, $years);
print_r($years);
?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>

    <section class="wrap">
      <?php if($artworks->count()): ?>
        <?php foreach($artworks as $artwork): ?>

          <artwork class="artwork index">

            <header class="artwork-header">
              <h2 class="artwork-title">
                <?= $artwork->title()->html() ?>
              </h2>

            </header>

            <?php snippet('coverimage', $artwork) ?>

            <?= $artwork->image() ?>
            <div class="text">
              <p>
                <?= $artwork->text()->html() ?>
                  <p class="artwork-date"><?= $artwork->date('F jS, Y') ?></p>
              </p>
            </div>

          </artwork>

          <hr />

        <?php endforeach ?>
      <?php else: ?>
        <p>This blog does not contain any artworks yet.</p>
      <?php endif ?>
    </section>


  </main>

<?php snippet('footer') ?>
