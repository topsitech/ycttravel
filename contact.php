<?php

        if (isset($_POST['submit'])){

            $to="topsitech@gmail.com";

            $subject="Contact from YCT Tour Website";

            $mail_from="from: ".$_POST['useremail']." \n";

            $mail_from .="Content-Type: text/html; charset=utf-8 \n";

            $message="Here is the message:<br />
            ".$_POST['fname']."<br />
            ".$_POST['phone']."<br />
            ".$_POST['useremail']."<br />
            ".$_POST['message'];

            mail($mail_from,$to,$subject,$message);

            echo "Thanks! We received your Message";
            $TARGET = "/";

            header("Location: $TARGET");
            exit();


        }else{
            echo "You are not autorised to view this page";
    }
?>
