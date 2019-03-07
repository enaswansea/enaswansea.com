<?php snippet('header') ?>

<?php 

$assemblages = $page->children();

?>

  <main class="main" role="main">

    <div id="assemblages">
      <?php foreach ($assemblages as $assemblage): ?>
      <?php $oddeven = $assemblages->indexOf($assemblage) % 2 == 0 ? "even" : "odd"; ?>
      <div class="assemblage <?= $oddeven?>">
        <a href="<?= $assemblage->url() ?>">
        <div class="assemblage_cover">
            <?= $assemblage->files()->template('assemblage_cover')->first()->resize(500,500, 100)?>
            <?= $assemblage->files()->template('assemblage_cover')->first()->resize(500,500)->crop(50,500, 100); ?>
        </div>
        <div class="assemblage_title"><?= $assemblage->title() ?></div>
       </a>
      </div>
      <?php endforeach ?>
    </div>


  </main>

<?php snippet('footer') ?>
