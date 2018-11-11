<?php

$con = mysqli_connect('localhost','root','','sms');

// if connection is not connected then we'll get this error msg
if($con==false){
  echo "connection is not";
}

// we comment this else coz connection is every time ok and we don't need to show thi msg evry time on screen this only for connection checking purpose
// else {
//   echo "coneection ok";
// }


 ?>
