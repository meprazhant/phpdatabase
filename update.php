<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | <?php 
        require_once "connect.php";
    if(isset($_GET['name'])){
        $name = mysqli_real_escape_string($conn, $_GET['name']);
        echo $name;
    }
    ?>
    </title>
    <style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .userform form {
        display: flex;
        width: 200px;
        flex-direction: column;
        padding: 10px;
        background-color: grey;
        gap: 10px;
    }
    </style>
</head>

<body>
    <?php
    
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM user WHERE id=$id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            foreach($result as $res):
?>
    <div class='userform'>
        <form action='userupd.php?id=<?php echo $res['id'] ?>' method='post'>
            <label for='name'>Name</label>
            <input type='text' name='name' id='name' value='<?php echo $res['name'] ?>' placeholder='Enter your name'>
            <label for='email'>Email</label>
            <input type='email' name='email' id='email' value='<?php echo $res['email'] ?>'
                placeholder='Enter your email'>
            <label for='Username'>Username</label>
            <input type='text' name='username' id='username' value='<?php echo $res['username'] ?>'
                placeholder='Enter your Username'>
            <input type='submit' value='Edit' name='submit'>
        </form>
    </div>


    <?php
            endforeach;
        }else{
            echo "No record found";
        }
    }
        
        
        
    ?>
</body>

</html>