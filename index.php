<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 | Form</title>
    <style>
        body{
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .userform form{
            display:flex;
            width:200px;
            flex-direction:column;
            padding:10px;
            background-color:grey;
            gap:10px;
        }
        </style>
</head>
<body>
    <div class="userform">
        <h2>Hola, Gracias hehe</h2>
        <form action="post.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <label for="Username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your Username">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>