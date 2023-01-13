<?php
      require_once "connect.php";
   if(isset($_POST['submit'])){
      
      // prevent from mysql injection
      $id = mysqli_real_escape_string($conn, $_GET['id']);
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);


    $sql = "UPDATE user set name='$name',email='$email',username='$username' WHERE id='$id'";

    $result = $conn->query($sql);

    if($result===TRUE){
        echo "Record updated";
        header("Location: table.php");
   }else{
    echo "Error";
    echo "<a href='table.php'>Back to table </a>";
   }
   }


?>