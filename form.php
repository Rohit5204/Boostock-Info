<?php
    $to = "rohit.mentorp@gmail.com";
    $subject = "Registration Form";
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $mailid = $_POST['mailid'];
    $investment = $_POST['invest'];
    $segment = $_POST['seg'];
    
    $message =  "Name " .$name."\n". 
                "Phone " .$phone . "\n" . 
                "Mail " .$mailid. "\n" .
                "Investment " . $investment ."\n".
                "Segment " .$segment."\n" 

    $result1 =mail($to,$subject,$message)
    if ($result1 ) {
        echo("Your Message was sent Successfully!");
      } 
      

?>
 
