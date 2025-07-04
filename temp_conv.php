<?php 

// User input for celsius

$choose = readline("Enter Celsius or Fahrenheit: ");

if($choose == "Celsius"){
    $celsius = (float) readline("Enter celsius temperature: ");
    $toFahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius °C is equal to $toFahrenheit °F \n";
}elseif($choose == "Fahrenheit"){
    $fahrenheit = (float) readline("Enter fahrenheit temperature: ");
    $toCelsius = ($fahrenheit - 32) * 5/9;
    echo "$fahrenheit °F is equal to $toCelsius °C\n";
}else{
    echo "Invalid Input";
}
?>