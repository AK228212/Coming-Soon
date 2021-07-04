<?php 
    include('db.php');
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $query = "select password from users where username='$uname'";
    $result = mysqli_query($conn , $query);
    $column = mysqli_fetch_assoc($result);
    $password = $column['password'];
    
    //session_start();

    if(!isset($password)){
        echo "$uname doesn't exist!";
        header("location:./index.html");
    }elseif($pwd == $password ){
        session_start();
        $_SESSION['uname'] = $uname;
        header("location:./dashboard.php");
    }else{
        echo "Wrong Password!";
        header("location:./index.html");
    }

?>