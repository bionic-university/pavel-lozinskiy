<?php

spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});

$tl = new President();
$tl->addObserver(new PresidentialSpier());
$tl->performDuty();
