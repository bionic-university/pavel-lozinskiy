<?php

spl_autoload_register(function ($class) {
    require_once 'src/' . $class . '.php';
});

$tl = new President();
$tl->addObserver(new PresidentialSpier());
$tl->performDuty();
