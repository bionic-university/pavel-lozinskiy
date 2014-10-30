<?php
namespace NS;

include 'ObservableInterface.php';
include 'ObserverInterface.php';
include 'UserList.php';
include 'UserListLogger.php';

$ul = new UserList();
$ul->addObserver(new UserListLogger());
$ul->addCustomer("Jack");
$ul->addCustomer("Pol");
