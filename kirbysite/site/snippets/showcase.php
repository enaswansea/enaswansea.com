<?php

$exhibitions = page('exhibitions')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of exhibitions:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $exhibitions = $exhibitions->limit($limit);

?>

<ul class="showcase grid gutter-1">

  <?php foreach($exhibitions as $exhibition): ?>

    <li class="showcase-item column">
        <a href="<?= $exhibition->url() ?>" class="showcase-link">
          <?php if($image = $exhibition->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $exhibition->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $exhibition->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>
