<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

/**
 * Return the logo for any requested file
 */
$app->get(
    '/{filename}.{ext}',
    function () {

        // Do stuff...

        header("Content-type: image/jpg");

        // The following to be set if we want to manage campaigns

        // header("Expires: Mon, 1 Jan 2099 05:00:00 GMT");
        // header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        // header("Cache-Control: no-store, no-cache, must-revalidate");
        // header("Cache-Control: post-check=0, pre-check=0", false);
        // header("Pragma: no-cache");

        return readfile('http://view.100collegehill.co.nz/images/proximity.logo.jpg');
    }
);

/**
 * Redirect /campaign to any url
 */
$app->get(
    '/campaign',
    function () use ($app) {
        return $app->redirect('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
    }
);

$app->run();
