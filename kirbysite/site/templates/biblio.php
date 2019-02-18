<?php snippet('header') ?>
<?php
$biblio = page('biblio')->children()->visible();
?>

  <main class="main" role="main">

    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>
    </div>


<div class="biblio">

<?php $years = $page->articles()->toStructure()->groupBy('year');
foreach($years as $year => $articles): ?>
  <div class="year">
    <div class="year-num"><?= $year ?></div>
    <ul class="articles">
     <?php foreach($articles as $article) : ?>


     <?php if($image = $article->image()->first()->toFile()): $thumb = $image->crop(200, 200); ?> 
    <?php //print( $thumb ) ?>
    <?php endif ?>

     <?php if($pdf = $article->pdf()->first()->toFile()): ?>
    <?php //print( $pdf->url()) ?>
    <?php endif ?>



      <div class="summary"><?= $article->biblio() ?></div>
      <?php endforeach; ?>
    </ul>
<?php endforeach ?>





</div>
      
  </main>

<?php snippet('footer') ?>
