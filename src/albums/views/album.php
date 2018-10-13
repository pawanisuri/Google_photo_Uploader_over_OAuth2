<?php

if ($album->getIsWriteable()) {
    $title = "Add your images to google photo albums";
} else {
    $title = "View images in album";
}

$this->layout('template', ['title' => $title,
    'back' => 'index.php', 'additionalStylesheets' => ['views/style.css']]);
?>

<div class="mdl-grid">

    <div id="album-header" class="mdl-cell mdl-cell--12-col">
        <h3><?= $album->getTitle() ?></h3>
        <a class="mdl-button mdl-button--primary"
           href="<?= $album->getProductUrl() ?>">Open in Google Photos</a>
    </div>

    <?php if ($album->getIsWriteable()) : ?>
    <div class="mdl-cell mdl-cell--12-col">
        <form method="post" enctype="multipart/form-data"
              action="album.php?id=<?= $album->getId() ?>">
            <label id="upload-label"
                   class="mdl-button mdl-button--raised mdl-button--primary"
                   for="media-uploads">
              Choose your favorite photo
            </label>
            <input type="file" id="media-uploads"
                   class="mdl-button mdl-js-button mdl-button--primary"
                   name="media_uploads[]" data-multiple-caption="{count} files selected" multiple>
            <button id="add-btn" class="mdl-button mdl-button--raised mdl-button--primary">
              Add to end of album
            </button>
        </form>
    </div>
    <?php endif ?>

    <?php $this->insert('image_grid', ['mediaItems' => $mediaItems]); ?>

</div>

<?php $this->push('scripts') ?>
  <script>
    document.querySelector('#media-uploads').addEventListener('change', function (e) {
      var fileName = '';
      if (this.files && this.files.length > 1) {
        fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}',
            this.files.length);
      } else {
        fileName = e.target.value.split('\\').pop();
      }
      document.querySelector('#upload-label').innerHTML = fileName;
      document.querySelector('#upload-label').classList.remove("mdl-button--raised");

      document.querySelector('#add-btn').style.visibility = "visible";
    })
  </script>
<?php $this->end(); ?>