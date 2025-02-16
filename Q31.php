<?php
$num=371;
$result=0;
$originalNumber=$num;
while($num>0){
$rem=$num%10;
$num=$num/10;
$result += $rem*$rem*$rem;
}
if($result==$originalNumber){
echo"It is an Armstrong number";
}
else{
echo"It is not an Armstrong number";
}
echo"<br>This code is executed by Vanshika Malhotra(Prn 2220100282)";
?>