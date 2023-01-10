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

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Actions</th>
    </tr>
    <?php
    require_once "connect.php";

    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        for($i=0;$i<$result->num_rows;$i++){
            $row = $result->fetch_assoc();
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["username"] . "</td><td>"."<form method='POST' action='userdel.php'><button type='submit' name='submit' value=".$row['id'].">Delete</button></form>"."</td></tr>";
        }
    }else{
        echo "No Data available";
    }

    ?>
    




</table>
    
</body>
</html>