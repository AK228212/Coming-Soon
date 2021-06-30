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
            
            mail($email, $subject, $message,  $header);
            header("location:../coming soon/index.html");
        }
        else{
            echo "Data not saved";
        }
    }
?>