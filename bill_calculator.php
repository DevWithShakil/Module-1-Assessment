<?php 

$units = (float) readline("Enter the amount of unit: ");

if($units < 1){
    echo "Please enter a valid positive unit amount from 1 to infinity.";
}elseif($units <= 50){
    $bill = $units * 3.50;
    echo "Total electricity bill is: $bill TK.";
}elseif($units <= 100) {
    $bill = 50 * 3.50 + ($units - 50) * 4.00;
    echo "Total electricity bill is: $bill TK.";
}elseif($units <= 200) {
    $bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    echo "Total electricity bill is: $bill TK.";
} else{
    $bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
    echo "Total electricity bill is: $bill TK.";
}
?>