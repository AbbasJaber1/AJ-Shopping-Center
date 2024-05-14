
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="test.js"></script>
    
</head>

<body>
    <div class="container" >
        <h2>Login</h2>
        <form action='validation.php' method='POST'>
                <label for="username" class="UserName" value='<?php echo $user;?>'>Username:</label>
                <input type="text" name="username" class="form-control" required>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" name="pass" class="form-control" required>
                <br><br>
                <input type="submit" name='submit' value='Login'>
            </form>
            
            <button class="btn" onclick="window.location.href='signUp.php';">Sign Up</button>
        </div>
    </body>
</html>

