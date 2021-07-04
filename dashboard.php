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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/MominRaza/Amboo@d6f2d211443f56b492f435d46c689ae2fd12a505/css/amboo.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet"/>
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

<body class="center">
    <h1>Contacting details</h1>.
    <center>
        <table class="center">
            <tr>
                <th>S. No.</th>
                <th>Name</th>
                <th >Email</th>
                <th >Job Title</th>
                <th >Company Name</th>
                <th>Country Name</th>
                <th>Message</th>
                <th>Send</th>
            </tr>

            <?php
            $i =1;
            while($row = mysqli_fetch_assoc($run)): ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['name']?></td>
                <td>
                    <?php echo $row['email']?>
                </td>
                <td><?php echo $row['jobTitle']?></td>
                <td><?php echo $row['companyName']?></td>
                <td><?php echo $row['country']?></td>
                <td><?php echo $row['message']?></td>
                <td>
                    <form action="sendMessage.php" method="POST">
                        <input type="hidden" name="userName" value="<?= $row['name']?>">
                        <input type="hidden" name="userEmail" value="<?= $row['email']?>">
                        <input type="hidden" name="userMessage" value="<?= $row['message']?>">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message for user!"></textarea>
                        <button type="submit" class="btn primary icon-r">Send<i class="material-icons">send</i></button>
                    </form>
                </td>
            </tr>
                
            <?php
            $i++;
            endwhile ;?>
        </table>
    </center>
    <form action="logoutAdmin.php">
    <button class="logoutButton" id="logoutButton" type="submit" >Logout</button>
    </form>
</body>
</html>