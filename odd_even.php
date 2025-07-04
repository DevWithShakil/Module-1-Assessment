<?php 
// Taking user input
$number = (int) readline("Enter any number: ");

if($number > 0 && $number % 2 == 0) {
    echo "The number $number is positive even";
} elseif($number > 0 && $number % 2 != 0) {
        echo "The number $number is positive odd";
} elseif($number < 0 && $number % 2 == 0){
    echo "The number $number is negative even";
}elseif($number < 0 && $number % 2 != 0){
    echo "The number $number is negative odd";
}else{
    echo "Invalid input";
};









?>