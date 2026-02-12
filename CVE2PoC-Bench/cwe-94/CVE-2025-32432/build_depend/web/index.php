<?php

require dirname(__DIR__) . '/bootstrap.php';

/** @var craft\web\Application $app */
$app = require CRAFT_VENDOR_PATH . '/craftcms/cms/bootstrap/web.php';
$app->run();
