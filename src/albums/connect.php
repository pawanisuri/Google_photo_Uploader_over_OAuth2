<?php


require '../common/common.php';

// This sample app reads and writes photos, so it's reasonable to request the photoslibrary scope.
connectWithGooglePhotos(
    ['https://www.googleapis.com/auth/photoslibrary'],
    $ini['albums_authentication_redirect_url']
);
