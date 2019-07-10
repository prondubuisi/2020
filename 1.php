<?php

//Program to concatenate string of user input

$firstName = readline("Enter your first name ");
$lastName = readline("Enter your last name ");
$age = getAge();
$currentYear = date('Y');
$birthYear = $currentYear - $age;

echo "Welcome, " . $firstName . " " . " " . $lastName . " (" . $birthYear . ")";

function getAge(): string  {

  do {
    $age = readline("Enter your age ");
  } while(!is_numeric($age));

    return $age;
}


