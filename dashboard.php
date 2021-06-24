<?php
    
    include('db.php');
    $query = 'select * from demo';
    $run = mysqli_query($conn, $query);
    session_start();
    if($_SESSION['uname'] != "admin"){
        header("location:http://localhost/coming soon/login.html/");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        h1{
            text-align:center;
        }

        table{
            margin-top:5rem;
            border: 2px solid;
            background:#eee;
        }

        td{
            margin:0;
            padding:1.4rem;
        }
        th{
            border-bottom:2px solid;
            background:#ddd;
        }
    </style>
</head>
<body>
    <h1>Contacting details</h1>
    <table>
        <tr>
            <th>S. No.</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th >Email</th>
            <th >Phone</th>
            <th >Job Title</th>
            <th >Company Name</th>
            <th>Organization Name</th>
            <th>Country Name</th>
            <th>State Name</th>
            <th>Comment/Question</th>
        </tr>

        <?php
         $i =1;
         while($row = mysqli_fetch_assoc($run)): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['firstName']?></td>
            <td><?php echo $row['middleName']?></td>
            <td><?php echo $row['lastName']?></td>
            <td>
            <a href="mailto:<?php echo $row['email']?>?subject=organisational mail&body=your message was: <?php echo $row['commentorquestion']?>%0D%0A Your Name : <?php echo $row['firstName']?>">
                <?php echo $row['email']?></a>
            </td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['jobTitle']?></td>
            <td><?php echo $row['companyName']?></td>
            <td><?php echo $row['organizationName']?></td>
            <td><?php echo $row['countryName']?></td>
            <td><?php echo $row['StateName']?></td>
            <td><?php echo $row['commentorquestion']?></td>
        </tr>

        <?php
         $i++;
         endwhile ;?>
    </table>
    <form action="logoutAdmin.php">
    <button class="logoutButton" id="logoutButton" type="submit" >Logout</button>
    </form>
</body>
</html>