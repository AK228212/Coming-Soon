<?php

    include('db.php');
    //variables
    $firstName  = $_POST['fname'];
    $middleName  = $_POST['mname'];
    $lastName  = $_POST['lname'];
    $email = $_POST['email'];
    $phone  = $_POST['phone'];
    $jobTitle  = $_POST['jtitle'];
    $companyName  = $_POST['cname'];
    $organizationName  = $_POST['oname'];
    $countryName  = $_POST['country'];
    $stateName  = $_POST['sname'];
    $commentorquestion = $_POST['commentorquestion'];



    //check fields
    if(empty($firstName)||empty($lastName)||empty($email) ||empty($phone)||empty($jobTitle) ||empty($countryName)||empty($stateName) ||empty($companyName) ||empty($commentorquestion))
    {
        echo "Please fill it correctly!";
    }
    else
    {
        $query = "insert into demo(firstName,middleName,lastName,email,phone,jobTitle,companyName,organizationName,countryName,StateName,commentorquestion) 
                    value('$firstName','$middleName','$lastName','$email','$phone','$jobTitle','$companyName','$organizationName','$countryName','$stateName','$commentorquestion')";

        $mySql = mysqli_query($conn, $query);

        if(isset($mySql)){
            header("location:http://localhost/coming soon/index.php");
        }
        else{
            echo "Data not saved";
        }
    }
?>