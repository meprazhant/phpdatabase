<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>

<table border="2px">
        <thead>

            <tr>
                <th>SN</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <?php
    require_once "connect.php";

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "<tbody>";
        foreach($result as $index => $res) : 
            ?>
         <tr>
            <td><?php echo $index +1 ?></td>
            <td><?php echo $res['id']?></td>
            <td><?php echo $res['name']?></td>
            <td><?php echo $res['email']?></td>
            <td><?php echo $res['username']?></td>
            <td><a href="userdel.php?id=<?php echo $res['id'] ?>&name=<?php echo $res['name']?>">Delete</a></td>
            <td><a href="update.php?id=<?php echo $res['id'] ?>&name=<?php echo $res['name']?>">Update</a></td>

        </tr>
        <?php
        endforeach;
        echo "</tbody>";
        
        }else{
        echo "No Data available";
        }

        ?>





    </table>
    
</body>
</html>