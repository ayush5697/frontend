<?php 
if(isset($_POST['sub'])){ 

    $to = "94ayushkumar@gmail.com"; // Your email here
    $subject = 'Message from my website'; // Subject message here

  }

  //Send mail function
  function send_mail($to,$subject,$message,$headers){
    if(@mail($to,$subject,$message,$headers)){
      echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));
    } else {
      echo json_encode(array('info' => 'error', 'msg' => "Error, your message hasn't been sent"));
    }
  }

  //Sanitize input data, remove all illegal characters  
  $name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
  
   $result = "Name:".$name."\n email:".$email."\n subject: ".$subject."\n message: ".$message;

  //Send Mail
  $headers = 'From: ' . $email .''. "\r\n".
  'Reply-To: '.$email.'' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

 /*send_mail($to, $subject, $result, $headers);*/
?>

    <!-- ***** email Contact Us  end ****-->
