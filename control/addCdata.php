<?php
$error="";
if (isset($_POST['submit'])) {
if (empty($_POST['fname']) || empty($_POST['lname'])|| empty($_POST['email'])|| 
empty($_POST['gender']) || empty($_POST['phone']) || empty($_POST['message']) || empty($_POST['accountno']) || empty($_POST['branch']) ) {
    $error = "All data must be Present";
}else{
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$formdata = array(
    'First Name'=> $_POST["fname"],
    'Last Name'=> $_POST["lname"],
    'Email'=> $_POST["email"],
    'Gender'=>$_POST["gender"],
    'Phone'=> $_POST["phone"],
    'Address'=> $_POST["message"],
    'Account No'=> $_POST["accountno"],
    'Branch'=> $_POST["branch"]
   

 );


 $existingdata = file_get_contents('../file/data.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;
 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 
 if(file_put_contents("../file/data.json", $jsondata)) {
      echo "<br> Data successfully saved <br>";
  }
 else 
      echo "no data saved";

}
}
}
?>