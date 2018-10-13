<?php

$this->layout('template', ['title' => 'Photos Library API PHP Sample', 'additionalStylesheets' => ['views/style.css']])
?>

<dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Create a new photo album  </h4>
    <form action="album.php">
    <div class="mdl-dialog__content">
        <div class="mdl-textfield mdl-js-textfield">
            <input type="text" class="mdl-textfield__input" name="create" id="create"/>
            <label for="create" class="mdl-textfield__label">Title</label>
        </div>
    </div>
    <div class="mdl-dialog__actions">
        <button class="mdl-button">Create</button>
        <a class="mdl-button close">Cancel</a>
    </div>
    </form>

</dialog>

<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col description">
        <h3>This is your Google Photos library</h3>
        <button id='create-btn' class="mdl-button mdl-button--raised mdl-button--colored">Create</button>
    </div>

    <?php $this->insert('album_grid', ['albums' => '234', 'photoLink' => 'album.php']);?>
</div>

<script>
  var dialog = document.querySelector('dialog');
  var showModalButton = document.querySelector('#create-btn');

  showModalButton.addEventListener('click', function() {
    dialog.showModal();
  });

  dialog.querySelector('.close').addEventListener('click', function() {
    dialog.close();
  });
</script>