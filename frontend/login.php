<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>

</head>
<body>
<?php include ("header.php") ?>
<main>
    <!--Code for the login page-->
    <div class="login-container">
        <h2>Login</h2>
        <p>Dont have an account? No problem, please <a href="./registration.php">Sign-UP</a></p>
        <form action ="./login2.php" method ="POST">
            <div class ="input-group">
                <label for ="username">Username: </label>
                <input type="text" id="username" name ="username"><!--We use javascript for the required-->
            </div>
            <div class="input-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password"><!--We use javascript foe the required-->
            </div>
            <div class="input-group">
                <input type ="submit" value="Login">
            </div>
            <!--This is for the footer in the main-->
            <div class ="footer">
                
            </div>
        </form>
    </div>
    
</main>
<?php include ("footer.php") ?>
</body>

</html>