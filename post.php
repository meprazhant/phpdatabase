<?php
    if(isset($_POST['submit'])){
        echo "button clicked";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];

        

        require_once "connect.php";

        $sql = "INSERT INTO user (name,email,username) VALUES ('$name','$email','$username')";
        
        if($conn->query($sql)===TRUE){
            echo "Record added succeed";
            header("Location: table.php");

        }else{
            echo "ERROR";
        }
    }
?>