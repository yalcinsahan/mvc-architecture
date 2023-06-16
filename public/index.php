<?php

require __DIR__. '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

session_start();

//routes
require __DIR__.'/../routes/web.php';

?>
