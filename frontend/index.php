<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: index.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/script.js"></script>
        <title>Home</title>
    </head>
    <body>
        <header>
        <?php include ("header.php") ?>
        </header>
        <main id ="home-main">
        <h2>Welcome to the Online Library</h2>
        <p>
            Our library is a free resource for all students, offering a collection of books 
            across various genres, including fantasy, romance, adventure, science, and more. 
            Whether you're looking for academic materials, research resources, or just a
            good book to read, you'll find it here! Users are welcome to view, add, or delete
            books. They can also create their own collection of favorite books.</p>
            <h3>
                Please <a href="registration.php">register</a> to use our services. if you are 
                already registered, please <a href="login.php">login</a>.
            </h3>

        </main>
<footer>
<?php include ("footer.php") ?>
</footer>
        
    </body>
</html>