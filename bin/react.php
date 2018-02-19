#!/usr/bin/env php
<?php
// bin/react.php

require __DIR__.'/../vendor/autoload.php';

$loop = React\EventLoop\Factory::create();
$socket = new React\Socket\Server($loop);
$http = new React\Http\Server($socket);

$callback = function ($request, $response) {
    $statusCode = 200;
    $headers = array(
        'Content-Type: text/plain'
    );
    $content = 'Hello World!';

    $response->writeHead($statusCode, $headers);
    $response->end($content);
};

$http->on('request', $callback);
$socket->listen(1337);
$loop->run();
