<?php

spl_autoload_register(function ($class) {
    include 'src/' . $class . '.php';
});

$ul = new UserList();
$ul->addObserver(new UserListLogger());
$ul->addCustomer("Jack");
$ul->addCustomer("Pol");
