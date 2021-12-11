<?php
  $username=$_GET['username'];
  $pass=$_GET['Password'];
  if($username==" " && $pass==" "){
      echo " you must enter data";
  }
  else {
    echo " Your user name is :  ". $_GET['username']."<br>";
    echo " Your Password is :  ". $_GET['Password']."<br>";
  }
?>
  
<hr>
<button type="button" onclick='alert("success")'>Click Me!</button>


