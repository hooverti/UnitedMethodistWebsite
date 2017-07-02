<?php
      $field_name = $_POST['name'];
      $field_email = $_POST['email'];
      $field_message = $_POST['message'];
      
$mail_to = 'rosemarypeterson@att.net';
$subject = 'United Methodist Nursery School message from '.$field_name;
      
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message."\r\n";
      
mail ($mail_to, $subject, $body_message);

if (mail) { ?>
    <script language="javascript" type="text/javascript">
    alert('Thank you for the message.  We will contact you shortly.');
        window.location = 'contact.html';
    </script>
<?php
}
else { ?>
    <script language="javascript" type="text/javascript">
        alert ('Message failed.  Please, send an email to hooverti102293@yahoo.com');
    </script>
<?php
}
?>