
<!-- // if(isset($_POST['submit'])){
//     $mailto = "adenikem@yahoo.com";
//     $from = $_POST['email'];
//     $name = $_POST['name'];
//     $subject = $_POST['message'];
//     $subject2 = "Your messgae was submitted successfully | House of Nykkhy";
//     $message = "Client Name: ". $name . "Wrote the following message". "\n\n". $_POST['message'];
//     $message2 = "Dear ". $name. "\n\n" ."Thank you for contacting us. We will get back to you shortly";
//     $headers = "From: ". $from;
//     $headers2 = "from: ". $mailto;
//     $result = mail($mailto, $subject, $message, $headers);
//     $result2 = mail($from, $subject2, $message2, $headers2);
//     if($result){
//         echo '<script type="text/javascript">alert("Message was sent successfully, we will get back to you shortly") </script>';
//     }else{
//         echo '<script type="text/javascript">alert("Message failed to send. Try again") </script>';
//     }
// } -->


<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("recievers_mail_id@xyz.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>
