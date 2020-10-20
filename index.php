<?php

require '../vendor/autoload.php';

$products = ['a', 'b', 'c', 'd', 'e'];

$loader = new Twig\Loader\FilesystemLoader('/home/paultxr/Documents/Projects/Twig/src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', array('products' => $products));