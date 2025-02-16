<?php
function selfmultiply(&$number){
$number*=$number;
return $number;
}

$mynum=5;
echo $mynum,"<br>";
selfmultiply($mynum);
echo $mynum;
echo "<br>This code is executed by Vanshika Malhotra(Prn 2220100282)";
?>