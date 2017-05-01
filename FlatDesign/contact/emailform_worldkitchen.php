<?php
//Supposed to work with the "User input" section. Which will send an email to The world kitchen. It will send a notepad file.
$name_Field= $_POST['name']; //Variable names that will store the values of whatever the user inputs in the textfields on the website
$mail_Field= $_POST['mail'];
$phone_Field= $_POST['phonenumber'];
$message_Field= $_POST['message'];

$fh = fopen("NEWNEWWorldKitchen Mail list.txt","w") or die("The file could not be created"); //Opens a notepad file
	fwrite($fh, $name_Field) or die ("Could not write to file. Check if all textfields have been filled out"); //Writes the info to the file
	/*fwrite($fh, $topic_Field) or die ("Could not write to file. Check if all textfields have been filled out");*/
	fwrite($fh, $mail_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $phone_Field) or die ("Could not write to file. Check if all textfields have been filled out");
	fwrite($fh, $message_Field) or die ("Could not write to file. Check if all textfields have been filled out");
fclose($fh); //Closes file.

?><?php
sleep(1);
echo"Thank you for contacting us. We will be in touch with you very soon.";

?>

<?php
header('Location:nyflad.html');
?>
