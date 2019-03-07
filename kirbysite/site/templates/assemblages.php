<?php snippet('header') ?>

<?php 

$assemblages = $page->children();

?>

  <main class="main" role="main">

    <div id="assemblages">
      <?php foreach ($assemblages as $assemblage): ?>
      <?php $oddeven = $assemblages->indexOf($assemblage) % 2 == 0 ? "even" : "odd"; ?>
      <div class="assemblage <?= $oddeven?>">
        <div class="assemblage_cover">
          <a href="<?= $assemblage->url() ?>">
            <?= $assemblage->files()->template('assemblage_cover')->first()->resize(500,500, 100)?>
          </a>
        </div>
        <div class="assemblage_title">
          <a href="<?= $assemblage->url() ?>">
            <?= $assemblage->title() ?>
          </a>
        </div>
      </div>
      <?php endforeach ?>
    </div>


  </main>

<?php snippet('footer') ?>
