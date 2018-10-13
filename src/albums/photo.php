<?php
require '../common/common.php';

use Google\Photos\Library\V1\PhotosLibraryClient;

/**
 * Retrieves information about the media item. Displays the image, and a table of metadata.
 */
if (isset($_GET['id'])) {
    checkCredentials($templates->render('albums::connect'));
    $photosLibraryClient = new PhotosLibraryClient(['credentials' => $_SESSION['credentials']]);
    try {
        $mediaItem = $photosLibraryClient->getMediaItem($_GET['id']);
        echo $templates->render('photo', ['mediaItem' => $mediaItem]);
    } catch (\Google\ApiCore\ApiException $e) {
        echo $templates->render('error', ['exception' => $e]);
    }
} else {
    echo $templates->render('error', ['exception' => 'An ID must be provided.']);
}
