

<?php
require_once('config.php');

$form= json_decode(file_get_contents("php://input"));

$fname=$form->firstname;
$lname=$form->lasttname;
$email=$form->userid;
$mobile=$form->mobile;
$pass=$from->password;



$select = "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'" ;
$data=$conn->prepare($select);
$pre=$data->execute();


if(($pre) > 0){
   $message[] = 'user already exist'; 
}

   else{


    $query =( "INSERT INTO  `user_form` (First_name,last_name,Mobile_Number,email,password) values('$fname','$lname','$email',$mobile','$pass')");


      $insert = ("INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image_folder')");
     
      $stmt=$conn->prepare($insert);
      
      $result = ($stmt->execute()) ? array('status' => "A",
       'image' => $stmt->fetchAll(PDO::FETCH_ASSOC),
        'msg' => 'Data Fetched Successfully') : array('status' => "IN",
         'msg' => 'Server Busy..!');

         if($result){
        $message[] = 'registered successfully!';
         header('location:login.php');
      }else{
         $message[] = 'registeration failed!';
      }




      
   }


?>
   