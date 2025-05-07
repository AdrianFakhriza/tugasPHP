<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
    
    <form method="post">
        <label>Username</label><br>
        <input type="text" name="uname"><br>

        <label>Password</label><br>
        <input type="password" name="pwd"><br>

        <input type="submit" name="proses" value="Login"><br>
    </form>
    
    <?php
    
        if (isset($_POST['proses'])) {
            $username = $_POST['uname'];
            $password = $_POST['pwd'];
            $Login = $_POST['proses'];
            
            echo "Username: $username<br>";
            echo "Password: $password<br>";
        }
    
    ?>

</body>
</html>