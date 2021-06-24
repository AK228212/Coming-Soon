<?php 
            $conn = mysqli_connect('localhost', 'root', '', 'demo_details');
            if(!isset($conn))
            {
                echo "Not working";
            }
        ?>