<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:Content-Type');

require_once 'models/Notification.php';
require_once 'include/Constants.php';
require_once 'include/DB_Functions.php';

$responseArr = array();
$dbf = new DB_Functions();
$notification = new Notification();



if($_SERVER[REQUEST_METHOD] == GET){

   if(true){
    
       $result = $dbf->getTestMessage();
   
   
   if(true){
    $notification->setCode(200);
    $notification->setType(SUCCESS);
    $notification->setMessage('');
    $notification->setHint(SUCCESS);
    $responseArr[NOTIFICATION] = $notification;
    $responseArr[DATA] = $result;
    echo json_encode($responseArr);
   }else{
    $data = array();
    $notification->setCode(400);
    $notification->setType(FAILED);
    $notification->setMessage('');
    $notification->setHint(FAILED);
    $responseArr[NOTIFICATION] = $notification;
    $responseArr[DATA] = (object)$data;
    echo json_encode($responseArr);
   }
   
   
   
   }else{
    $data = array();
    $notification->setCode(400);
    $notification->setType(FAILED);
    $notification->setMessage('Some parameters are missing');
    $notification->setHint(FAILED);
    $responseArr[NOTIFICATION] = $notification;
    $responseArr[DATA] = (object)$data;
    echo json_encode($responseArr);
   
   }


}else{
   $data = array();
    $notification->setCode(400);
    $notification->setType(FAILED);
    $notification->setMessage('Invalid Method Type');
    $notification->setHint(FAILED);
    $responseArr[NOTIFICATION] = $notification;
    $responseArr[DATA] = (object)$data;
    echo json_encode($responseArr);
}
?>
