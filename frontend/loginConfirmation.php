<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: loginConfirmation.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!---link to the external css--->
    <link rel="stylesheet" href="./css/style.css">
<!---link to the external javascript--->
    <script src="./js/script.js"></script>
    
    <title>Confirmation of Login</title>
</head>
<body>
    <?php include ("header.php") ?>
    <main>
<!--Retrieve the username from the URL query parameter  and display a welcome message-->
    <?php $username = $_GET['username'];?>
    Welcome <?php echo $username?>. You have successfully logged in.
    </main>
    <?php include ("footer.php") ?>
</body>
</html>