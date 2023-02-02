<?php
    require __DIR__.'/vendor/autoload.php';
    require __DIR__ . '/app/controllers/router.php';

    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/app/views/');
    $routing = new \app\Routing();
    $twig = new \Twig\Environment($loader, [
        //'cache' => __DIR__ .'cache',
        'debug' => TRUE,
    ]);

    $twig->addGlobal('pageTitle', 'E-Restau');

    $twig->addExtension(new \Twig\Extension\DebugExtension());
    //$twig->addExtension(new MyExtension());
    echo $twig->render($routing->getURI());

