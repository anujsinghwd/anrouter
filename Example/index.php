<?php
require_once './AnRouter.php';

$route = new AnRouter();

$route->get('google');

function google()
{
    echo 'google called';
}

