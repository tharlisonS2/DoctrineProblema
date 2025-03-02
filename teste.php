<?php

require_once 'vendor/autoload.php';

$entityManager = \Alura\Tharlison\Helper\EntityManagerCreator::createEntity();

var_dump($entityManager);