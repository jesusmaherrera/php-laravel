<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('jesus@msn.com','1234');

$user->setName("jesus",'herrera');
// var_dump($user);
echo $user->getFirstName();
echo $user->getLastName();

