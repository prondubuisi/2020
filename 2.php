<?php

//generate numbers between 0 -9
$rangeArray = range(0,9);
//Store 3 random numbers in Array
$randomGuess = array_rand($rangeArray,3);

//display random guess content separated by space
echo $randomGuess[0] . " " . $randomGuess[1]. " " . $randomGuess[2] . "\n";

//check if any of the array content is 7
checkGuess($randomGuess);


function checkGuess() {
    if(in_array(7, $randomGuess)) {
        echo "Congratulations!";
        return true;
    }
    echo $randomGuess;
    echo "Try again! Better luck next time.\n";
    return 0;
}
