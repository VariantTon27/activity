<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Activity</title>
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <form action="process.php" method="post">
            <label for="username"> Username: </label><br>
            <input type="text" name="username"><br>

            <label for="password"> Password: </label><br>
            <input type="text" name="password"><br>

            <label for="firstName"> First Name: </label><br>
            <input type="text" name="firstName"><br>

            <label for="middleName"> Middle Name: </label><br>
            <input type="text" name="middleName"><br>

            <label for="lastName"> Last Name: </label><br>
            <input type="text" name="lastName"><br>

            <label for="role"> Role: </label><br>
            <input type="text" name="role"><br>

            <button type="submit" name="registerButton">Register</button>
        </form>
    </div>
</body>
</html>
