<?php 
    require_once("sendmail.php"); 
		$to       =   "bouhlelhichem07@gmail.com";  
		$subject  =   $_POST["Subject"]; 
		$msg  =   $_POST["Message"];
 		$name     =   $_POST["Full_Name"];
    if (isset($_POST["Phone"])) {
      $phone    =   $_POST["Phone"];
    }else {
      $phone = "inconnu.";
    }

     
    $email    =   $_POST["Email"];
    $message  =   "Phone Sender :". $phone ."<br /> Email Sender : ". $email ."<br /> Message Sender :". $msg;
     $send = sendmail($to,$subject,$message,$name);
     if ($send = 1) {
     header('Location: index.html');
     } else {
      echo "there is some issue. ";
     }
     

?>

