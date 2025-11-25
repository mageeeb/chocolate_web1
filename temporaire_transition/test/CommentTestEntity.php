<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require '../src/' .$class . '.php';
});

use model\mapping\CommentMapping;

$testComment = new CommentMapping(datas: [
    ]);

$testComment1 = new CommentMapping(datas: [
    'id' => 1,
    'content' => 'This is a test comment.',
    'created_at' => new DateTimeImmutable('2024-06-01 12:00:00'),
    'is_accepted' => 1
]);

var_dump($testComment,$testComment1);


