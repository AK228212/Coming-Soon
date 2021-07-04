<?php

    include('db.php');
    //variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $jobTitle  = $_POST['jtitle'];
    $companyName  = $_POST['companyName'];
    $countryName  = $_POST['country'];
    $message = $_POST['message'];
    $subject = "Thanks for contacting us";
    $header ="From: username228212@gmail.com";



    //check fields
    if(empty($name)|| empty($email)|| empty($jobTitle)|| empty($countryName)|| empty($companyName)|| empty($message))
    {
        echo "Please fill it correctly!";
    }
    else
    {
        $query = "insert into demo(name, email, jobTitle, companyName, country, message) 
                    value('$name', '$email', '$jobTitle', '$companyName','$countryName', '$message')";

        $mySql = mysqli_query($conn, $query);

        if(isset($mySql)){
            include('mailAuth.php');
           try {
            $mail->addAddress($email, $name);
            $mail->Subject ='Welcome to LandEX';
            $mail->Body ='<h1>Hello, <b>'.$name.'</b>!</h1> 
            <p>Our representative will contact you soon.</p> 
            
            <p><b>Your Message was:</b></p><p><q>'.$message.'</q></p>
            
            <p>Thanks For contacting us.</p>';
            $mail->send();
            header("location:./index.html");
           } catch (Exception $e) {
               echo "Error Occur!";
           } 
           
        }
        else{
            echo "Data not saved";
        }
    }
?>