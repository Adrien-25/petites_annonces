<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../application/template/');
$twig = new \Twig\Environment($loader, [
    'cache' => '../application/cache',
]); 
$template = $twig->load('pages/index.html.twig');
echo $template->render([]);