<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - AJ Shopping Center</title>
    <link rel="stylesheet" href="stylelSignUp.css">
</head>
<body>
    <header class="signUp">
       
    </header>

    <main>
        <h1>Sign Up</h1>
        <form action="includes/formhandler.inc.php" method="POST">
            
            <label for="username">Username:</label>
            <input type="text" name = "username" placeholder = "Username"><br>

            <label for="password">Password:</label>
            <input type="password" name = "pass" placeholder = "Password"><br>

            <button>Sign Up</button>

        </form>
    </main>
</body>
</html>