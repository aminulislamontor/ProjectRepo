<?php
$validatename="";
$validateemail="";
$validatephone="";
$validateaddress="";
$validateradio="";
$validateaccount="";
$name=$email=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_REQUEST["fname"];
$email=$_REQUEST["email"];

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "you must enter name";
}
else
{
    $validatename;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail;
}

if(empty($_REQUEST["phone"]) || (strlen($_REQUEST["phone"])<3))
{
    $validatephone= "you must enter Phone Number";

}
else
{
    $validatephone;
}

if(empty($_REQUEST["message"]) || (strlen($_REQUEST["message"])<3))
{
    $validateaddress= "you must enter Address";

}
else
{
    $validateaddress;
}

if(empty($_REQUEST["accountno"]) || (strlen($_REQUEST["accountno"])<3))
{
    $validateaccount= "you must enter Account No";

}
else
{
    $validateaccount;
}

if(isset($_REQUEST["gender"]))
{
    $validateradio;
}
else{
    $validateradio= "please select Gender";
}
}
?>