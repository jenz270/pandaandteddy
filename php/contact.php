<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'jhou25@uwo.ca';
$subject = 'Message from website visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if($mail_status){ ?>
   <script language="javascript" type"text/javascript">
       alert('Thank you for leaving us a message. We will contact you shortly.');
       window.location = 'contact.html';
   </script>
 <?php
} 
else{?>
 <script language="javascript" type"text/javascript">
       alert('Message has failed to send. Please email to jhou25@uwo.ca');
       window.location = 'contact.html';
   </script>
<?php
}
?>