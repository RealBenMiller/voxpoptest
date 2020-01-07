<?php

    require("class.phpmailer.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name']; // Get Name value from HTML Form
        $email=$_POST['email'];  // Get Email Value
         
        $mail = new PHPMailer();
    
         
        $mail->setFrom = ($email, $name);
        $mail->AddAddress ("ben@benrmiller.co.uk"); // On which email id you want to get the message
         
        $mail->Subject = "Enquiry from Website submitted by $name"; // This is your subject
         
        // HTML Message Starts here
         
        $mail->Body = "
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
             
        if(!$mail->Send()) {
            // Message if mail has been sent
            echo "<script>
                alert('Submission failed.');
            </script>";
        }
        else {
            // Message if mail has been not sent
            echo "<script>
                alert('Email has been sent successfully.');
            </script>";
        }
    }
?>