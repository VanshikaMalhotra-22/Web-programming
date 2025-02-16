<?php
function factorial($n){
if($n<=1){
return 1;
}
return $n*factorial($n-1);
}
$number=5;
echo"Factorial of $number is ",factorial($number);
echo"<br>This code is executed by Vanshika Malhotra(Prn 2220100282)";
?>