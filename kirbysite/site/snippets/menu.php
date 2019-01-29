<div id="menus">

  <ul id="main_menu" class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>

<?php 
/************ GALLERY *************/
if($page->id() == "gallery" || $page->parent() == "gallery"): ?>

<?php

$gallery_pages = $pages
->get("gallery")
->children()
->sortBy('artwork_year', 'desc');

$unique_years = array_unique($gallery_pages->pluck('artwork_year'));

$thisyear = "";
if($tag = param('year')) {
    $thisyear = param('year');
}

$selected = false;
if($tag = param('selected')) {
    $selected = true;
}


?>

<ul class="submenu gallery_years">
    <li><a class="gallery_year <?= $selected ? "active" : "" ?>" href="<?= $pages->get("gallery")->url()?>/selected:true">Selected</a></li>
    <?php foreach($unique_years as $year): ?>
        <?php $classtext = $year == $thisyear ? "active" : "" ?>
        <li><a class="gallery_year <?= $classtext?>" href="<?= $pages->get("gallery")->url()?>/year:<?= $year ?>"><?=$year?></a></li>
    <?php endforeach ?>
</ul>

<?php endif ?>








<?php 

/************ EXHIBITIONS *************/
if($page->id() == "exhibitions" || $page->parent() == "exhibitions"): ?>


<?php 
$exhibitions = page('exhibitions')->children()->visible();
?>


<ul class="submenu exhibitions">
    <?php foreach($exhibitions as $exhibition): ?>
        <?php $classtext = $page->id() == $exhibition->id() ? "active" : "" ?>
            <li><a class="exhibition <?= $classtext?>" href="<?= $exhibition->url()?>"><?= $exhibition->title()->html() ?></a></li>
    <?php endforeach ?>
</ul>
<?php endif ?>

</div>


