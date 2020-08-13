<?php
    # check if submit button pressed
    if(isset($_POST['submit'])) {
        # get all data from contact form
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['textarea'];
        
        
        $to = "victoriaeugenia2018@gmail.com";
        $headers = "New Inquiry from Personal website: ".$name;
        
        $email_subject = "New Inquiry from Personal website";
        $email_body = "User Name: ".$name."\n".
                        "User Email: ".$visitor_email."\n".
                            "User Message: " .$message."\n";
        
        mail($to, $email_subject, $email_body, $headers);
        header("Location: contact.html?mailsend");
    }


    if (($name=="")||($visitor_email=="")||($message=="")){
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
    }
?>
