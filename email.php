<?php
 
 $to = 'watspoppin2day@gmail.com';
 $subject = $_POST['subject'];
 $message = 'Name: ' .$_POST['name'] ."\n"
 .'From: ' .$_POST['email'] ."\n" 
 .'message: ' .$_POST['message'];
 $headers = 'from: '. $_POST['email'];
 
 
mail($to,$subject,$message,$headers);

header('location: ../');


?>