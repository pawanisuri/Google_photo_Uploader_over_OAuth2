<?php
require '../common/common.php';

use Google\Photos\Library\V1\PhotosLibraryClient;

/**
 * Removes the app's access to the user's Photos account.
 */
if (isset($_GET['clear'])) {
    unset($_SESSION['credentials']);
}

checkCredentials($templates->render('albums::connect'));
$photosLibraryClient = new PhotosLibraryClient(['credentials' => $_SESSION['credentials']]);

/**
 * Retrieves the user's albums, and renders them in a grid.
 */
try {
    $pagedResponse = $photosLibraryClient->listAlbums();
    // By using iterateAllElements, pagination is handled for us.
    echo $templates->render(
        'albums::index',
        ['albums' => $pagedResponse->iterateAllElements()]
    );
} catch (\Google\ApiCore\ApiException $e) {
    echo $templates->render('error', ['exception' => $e]);
}
