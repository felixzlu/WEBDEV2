<!--Things need to be done
1) Form validation using javacsript
2)CSS styling
3) Add anything necessary-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./js/script.js"></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <main>
            <form action="./registration2.php" method="POST" onsubmit="return validate();">
                <fieldset><!--Helps in grouping all the elements together-->
                <legend>CREATE ACCOUNT</legend><!--Legend helps to create a title for the form-->
                    <label for="email">Email: </label><!--This creates the names-->
                    <input type="text" id="email" name="email"><br><!--This creates the text box, Note we are not adding reuired in html, we need to do this in javascript-->
                    <div id="erroremail"></div>

                    <label for="username">Username: </label>
                    <input type="text" id ="username" name="username"><br>
                    <div id="errorlogin"></div>

                    <label for="password">Password: </label>
                    <input type="password" id ="password" name="password"><br>
                    <div id="errorpassword"></div>

                    <label for="password2">Retype-Password: </label>
                    <input type="password" id ="password2" name="password2"><br>
                    <div id="errorpassword2"></div>

                    <label for="terms">Terms and Conditions: </label>
                    <input type="checkbox" id ="terms" name="terms"><br>
                    <div id="errorterms"></div>

                    <input type="submit" value="Sign-up">
                    <input type="reset">

                </fieldset>
            </form>
        </main>
        <!--This contains information about the privacy statements and Site map-->
        <?php include ("footer.php") ?>
    </body>
</html>