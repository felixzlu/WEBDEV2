<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: registration.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
<!---link to the external stylesheet--->
        <link rel ="stylesheet" href="./css/style.css">
<!---link to the external javascript--->
        <script src="./js/scriptRegistration.js" defer></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <main>
            <form action="./registration2.php" method="POST" onsubmit="return validate();">
                <fieldset><!--Helps in grouping all the elements together-->
                <legend>CREATE ACCOUNT</legend><!--Legend helps to create a title for the form-->
                    <label for="email">Email: </label><!--This creates the names-->
                    <input type="text" id="email" name="email"><br><!--This creates the text box--->
                    <div id="erroremail"></div>

<!--This creates the username field in the form--->
                    <label for="username">Username: </label>
                    <input type="text" id ="username" name="username"><br>
                    <div id="errorlogin"></div>

<!--This creates the password field in the form--->
                    <label for="password">Password: </label>
                    <input type="password" id ="password" name="password"><br>
                    <div id="errorpassword"></div>
<!--This creates the password2 field in the form--->
                    <label for="password2">Retype-Password: </label>
                    <input type="password" id ="password2" name="password2"><br>
                    <div id="errorpassword2"></div>
<!--This asks the user to check the terms and conditions field in the form--->
                    <label for="terms">Terms and Conditions: </label>
                    <input type="checkbox" id ="terms" name="terms"><br>
                    <div id="errorterms"></div>

                    <input type="submit" value="Sign-up">
                    <input type="reset">

                </fieldset>
            </form>
        </main>
        <?php include ("footer.php") ?>
    </body>
</html>