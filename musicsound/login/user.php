<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conn.php";
    ?>
    <h1>Login Form</h1>
    <form action="logActionin.php" method="POST">

        <label for="user">Username</label><br>
        <input type="text" name="user"><br><br>

        <label for="pass">User Password</label><br>
        <input type="password"  name="pass"><br><br>

        <label for="img">User image</label><br>
        <input type="image"  name="img"><br><br>

        <button>submit</button>
    </form>
</body>
</html>