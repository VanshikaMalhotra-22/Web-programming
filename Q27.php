<?php
$arr1=array(1,2,3,4,5);
$largestNumber = $arr1[0];
for($i=1; $i<=4; $i++){
 	if($arr1[$i] > $largestNumber){
		$largestNumber=$arr1[$i];
}
}
echo"Largest number is: ",$largestNumber;
echo"<br>This code is executed by Vanshika malhotra(prn 2220100282)";
?>