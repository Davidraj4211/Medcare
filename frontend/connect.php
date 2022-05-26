<?php
require_once('config.php');

$form= json_decode(file_get_contents("php://input"));

$fname=$form->firstname;
$lname=$form->lastname;
$email=$form->userid;
$mobile=$form->mobile;
$pass=base64_encode($form->password);


// print_r($form);

$query ="insert into user_form1 (First_name,last_name,Mobile_Number,email,password) values ('$fname','$lname','$mobile','$email','$pass')";

// print_r($query);


 $statement = $connect->prepare($query);
 
  if($statement->execute()){

    echo "inserted";
  }


?>