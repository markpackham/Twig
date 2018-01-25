<?php
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);

$md5Filter = new Twig_SimpleFilter('md5', function ($string) {
    return md5($string);
});

//We must add the filter to our twig instance
$twig->addFilter($md5Filter);

echo $twig->render('hello.html', array(
    'name' => 'Michael',
    'age' => 52,

    'users' => array(
        array('name' => 'Max', 'age' => 18),
        array('name' => 'James', 'age' => 22),
        array('name' => 'Billy', 'age' => 34),

    )

));

