<?php
    if(isset($_POST['submit'])){
        $id = $_POST['submit'];
        echo "Your id is " . $id;
        $sql = "DELETE FROM user WHERE id = $id";
        require_once "connect.php";
        if($conn->query($sql)===TRUE){
            echo "Record deleted";
            header("Location: table.php");
        }else{
            echo "ERROR";
            header("Location: table.php");

        }
    }


?>