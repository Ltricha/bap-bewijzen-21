<?php
include 'Person.php';

$birthdate = new \DateTime('1975-04-22');
$person = new Person('Joey', 'Schmitz',  $birthdate);

echo 'Hallo ' . $person->getFullname() . "\n\n";
echo 'Je bent geboren op een ' . $person->getDateOfBirth(). "\n\n";
