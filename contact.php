<?php

if(isset($_POST['email'])) {

    $email_to = "Joeldonaldakers@gmail.com";
 
    $email_subject = "Portfolio inquery";

 
    function died($error) {
 
 
        echo "Whoops! Something went wrong";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please fix the issue and then resubmit.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('Whoops! Something went wrong');       
 
    }
 
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 
 
    $email_message = "See below\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";

 
	 
	$headers = 'From: '.$email."\r\n".
	 
	'Reply-To: '.$email."\r\n" .
	 
	'X-Mailer: PHP/' . phpversion();
	 
	@mail($email_to, $email_subject, $email_message, $headers);  


?>
 
 

 
 
Thanks! I'll get back to you soon.
 
 
 
<?php
 
}
 
?>