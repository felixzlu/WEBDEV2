<!--Things need to be done
1) Form validation using javacsript
2)CSS styling
3) Add anything necessary-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Browse</title>
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./frontend/js/script.js"></script>
    </head>
    <body>
        <header> 
        <div class ="navbar">
        <a href="home.php">HOME</a>
        <a href="Browse.php">BROWSE</a>
        <a href="registration.php">MY REGISTRATION</a>
        <a href="search.php">SEARCH</a>
        <A href="myCollection.php">MY COLLECTION</A>
        <a href="login.php">LOGIN</a>
            </div>
        </header>
        <main>
            <form action="../backend/submit_form.php" method="POST">
                <fieldset><!--Helps in grouping all the elements together-->
                <legend>CREATE ACCOUNT</legend><!--Legend helps to create a title for the form-->
                    <label for="email">Email: </label><!--This creates the names-->
                    <input type="email" id="email" name="email"><br><!--This creates the text box, Note we are not adding reuired in html, we need to do this in javascript-->

                    <label for="username">Username: </label>
                    <input type="text" id ="username" name="usernmame"><br>

                    <label for="password">Password: </label>
                    <input type="password" id ="password" name="password"><br>

                    <label for="password2">Retype-Password: </label>
                    <input type="password" id ="password2" name="password2"><br>

                    <label for="terms">Terms and Conditions: </label>
                    <input type="checkbox" id ="terms" name="terms"><br>

                    <input type="submit" value="Sign-up">
                    <input type="reset">

                </fieldset>
            </form>
        </main>
        <!--This contains information about the privacy statements and Site map-->
        <footer>
            <ul>
                <li>Privacy statements</li>
                <li>Site map</li><!--Shows all the links to student library-->
            </ul>
        </footer>
    </body>
</html>