<?php

require_once('config.php');

$form= json_decode(file_get_contents("php://input"));

$email=$form ->loginid;

$pass=base64_encode($form->loginpassword);

// print_r($pass);die;


if(empty($error))
{
 $query = "
 SELECT * FROM user_form1 
 WHERE email = '$email' || password='$pass';";


 $statement = $connect->prepare($query);
 $statement->execute();
 

$fetch = $statement->fetch(PDO::FETCH_ASSOC);

if(($statement->rowCount())==1){

    if($fetch['Status']=='active'){
      $query_result = ($statement->execute()) ? array('status' => 1,'msg'=>'Success', 'data' => $statement->fetchAll(PDO::FETCH_ASSOC),  'row_count'=>$statement->rowcount()) : array('status' => 0, 'msg' => 'Server Busy');
    }
    else{
      $query_result = array('status' => 0, 'msg' => 'Sorry your account is inactive', 'count' => $statement->rowCount());
    }

  }
  else{
    $query_result = array('status' =>0, 'msg' => 'Invalid Login', 'count' => $statement->rowCount());

  }
//   print_r($query_result);die;
  echo json_encode($query_result);
}





















?>