<?php include "../control/cookie.php"; ?>

<h1>Welcome</h1>
<h2><a href="../view/addc.php">Add User</a></h2>
<br>
<br>

<?php

$data = file_get_contents("../file/data.json");
$mydata = json_decode($data);


foreach($mydata as $myobject)
{
foreach($myobject as $key=>$value)
{
  echo "Your ".$key." is ".$value."<br>";
} 
echo "<br>";
}

if (!isset($_COOKIE[$cookie_name])) {
  echo "Hello New User Your Cookie is not set";
}else{
  echo "Hello Old user Your Cookie is seted";
}

?>
<h5>Do you want to <a href="../control/logout.php">logout</a></h5>