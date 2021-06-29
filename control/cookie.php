<?php
$cookie_name = "UserType";
$cookie_value = "Old User";
setcookie($cookie_name, $cookie_value, time()+ (86400*30), "/");
?>

