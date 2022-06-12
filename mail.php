<?php
if(isset($_POST['submit'])){
    $mailto = "adenikem@yahoo.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['message'];
    $subject2 = "Your messgae was submitted successfully | House of Nykkhy";
    $message = "Client Name: ". $name . "Wrote the following message". "\n\n". $_POST['message'];
    $message2 = "Dear ". $name. "\n\n" ."Thank you for contacting us. We will get back to you shortly";
    $headers = "From: ". $from;
    $headers2 = "from: ". $mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);
    if($result){
        echo '<script type="text/javascript">alert("Message was sent successfully, we will get back to you shortly") </ script>';
    }else{
        echo '<script type="text/javascript">alert("Message failed to send. Try again") </ script>';
    }
}
