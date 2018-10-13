<?php
?>

<?php foreach ($mediaItems as $mediaItem) : ?>
    <a href="<?= "photo.php?id=" . $mediaItem->getId() ?>">
        <!-- We want an image of 200x200px exactly. -c indicates the image should be cropped -->
        <img class="thumbnail" src="<?= $mediaItem->getBaseUrl() . '=h200-w200-c' ?>"/>
    </a>
<?php endforeach ?>