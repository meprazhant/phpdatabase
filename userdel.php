<?php
    
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    

    $sql = "DELETE FROM user WHERE id = $id";
    require_once "connect.php";
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