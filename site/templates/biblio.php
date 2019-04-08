<?php snippet('header') ?>
<?php
$biblio = page('bibliography')->children()->visible();
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
        <div class="article">


     <?php if($image = $article->image()->first()->toFile()): $thumb = $image->crop(200, 200); ?> 
    <?php //print( $thumb ) ?>
    <?php endif ?>

     <?php if($pdf = $article->pdf()->first()->toFile()): ?>
    <?php //print( $pdf->url()) ?>
    <?php endif ?>



        <div class="summary"><?= $article->biblio() ?></div>
       </div>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endforeach ?>





</div>
      
  </main>

<?php snippet('footer') ?>
