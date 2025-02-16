<?php
function Armstrong($num){
$total=0;
$x=$num;
while($x!=0){
$rem=$x%10;
$total=$total+($rem*$rem*$rem);
$x=$x/10;
}
if($num==$total){
echo"$num & $total are equal & Armstrong";
}}
Armstrong(153);
echo"<br>This code is executed by Vanshika Malhotra(Prn 2220100282)";
?>