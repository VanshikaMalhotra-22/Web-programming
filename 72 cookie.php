<?php
setcookie("username","Arnav Kharbanda",time()+30*24*60*60);
if(isset($_COOKIE["username"])){
   echo "Hi" . $_COOKIE["username"];
}else{
  echo "Welcome Guest!","<br>";
}
print_r($_COOKIE);
echo "<br>";
echo "This program is executed by Vanshika Malhotra(Prn 2220100282)";
?>