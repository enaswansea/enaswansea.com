<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">


<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">


    <?php snippet('scss') ?>
  <?= css('assets/css/default.css') ?>

</head>
<body class="<?= $page->id() ?>">

<header id="header"></header>

<div id="content" class="template-<?= $page->template() ?>">

    <nav>
      <div id="site_title">
        <a href="<?= url() ?>" rel="home">
            <img id="logo_img" src="<?= kirby()->urls()->assets() ?>/images/ena_swansea_logo.svg" alt="">
        </a>
      </div>

        <?php snippet('menu') ?>
    </nav>
