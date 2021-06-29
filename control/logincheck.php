<?php

session_start(); 

 $error="";

 if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$data = file_get_contents("../file/logindata.json");
$mydata = json_decode($data);


foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
   $temp = $_POST['username'];
   if($value == $temp)
  {
   $_SESSION["username"] = $_POST['username'];
  }else
  {
   $error="Invalid Username";
  }
} 
echo "<br>";
}
}
 
}

?>