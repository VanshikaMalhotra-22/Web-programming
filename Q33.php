<?php
$num=121;
$originalNum=$num;
$sumNum=0;
while($num>0){
$rem=$num%10;
$num=$num/10;
$sumNum += $rem;
}
echo"Number is: ",$originalNum;
echo"<br>Sum of numbers :",$sumNum;
echo"<br>This code is executed by Vanshika Malhotra(Prn 2220100282)";
?>
