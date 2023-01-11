<?php
    $conn = new mysqli("localhost","root","","form");

    if($conn->connect_error){
        echo("problem in database connection" . $conn->connect_error);
    } else {
        // connected
    }


?>