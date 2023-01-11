<?php
   if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $id = $_GET['id'];

    require_once "connect.php";

    $sql = "UPDATE user set name='$name',email='$email',username='$username' WHERE id='$id'";

    $result = $conn->query($sql);

    if($result===TRUE){
        echo "Record updated";
        header("Location: table.php");
   }else{
    echo "Error";
    echo "<a href='/table.php'>Back to table </a>";
   }
   }


?>