<?php
    require_once "connect.php";
    
    if(isset($_POST['submit'])){
        echo "button clicked";

        // prevent from mysql injection
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);


        $sql = "INSERT INTO user (name,email,username) VALUES ('$name','$email','$username')";
        
        if($conn->query($sql)===TRUE){
            echo "Record added succeed";
            header("Location: table.php");

        }else{
            echo "ERROR";
        }
    }
?>