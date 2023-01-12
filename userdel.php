<?php
require_once "connect.php";
    
if(isset($_GET['id'])){

    // prevent from mysql injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $name = mysqli_real_escape_string($conn, $_GET['name']);

    $sql = "DELETE FROM user WHERE id = $id";
    if($conn->query($sql)===TRUE){
        echo "Record deleted";
        header("Location: table.php");
    }else{
        echo "ERROR";
        header("Location: table.php");

    }
} else {
    echo "No id found";
}


?>