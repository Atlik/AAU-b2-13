<?php

/*---------------------MAIL VARIABLES BEGIN------------------------*/
 //Variable names that will store the values of whatever the user inputs in the textfields on the website
$name_Field= $_POST['name'];
$mail_Field= $_POST['mail'];
$phone_Field= $_POST['phonenumber'];
$message_Field= $_POST['message'];

$to= "nikolaj730@hotmail.com";

$contactChosen='';
$contactWorldKitchen=$_POST['checkWorldKitchen'];
$contactJournalist=$_POST['checkJournalist'];
$contactCEO=$_POST['checkCEO'];

if($contactWorldKitchen){
    $contactChosen="To the worldkitchen's service";
}elseif($contactJournalist){
    $contactChosen= "To the Jounalist";
}elseif($contactCEO){
    $contactChosen= "To the CEO";
}

$headers = "From $name_Field". "\n". "To: $contactChosen";
$subject= "Worldkitchen contact";
$body="A person with the following information has contacted you: \n

Name: $name_Field \n
Email: $mail_Field \n
Phonenumber: $phone_Field \n
Message: $message_Field";
/*---------------------MAIL VARIABLES END------------------------*/

mail($to, $subject, $body, $headers);

header('Location:Contact.html');

?>

