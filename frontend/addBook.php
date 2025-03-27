<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addBook.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>addBooks</title>
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./js/scriptAddBook.js" defer></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <main>
        <form action="./addBook2.php" method="POST" onsubmit="return validate();">
            <fieldset><!--Helps in grouping all the elements together-->
                <legend>ADD BOOK TO DATABASE</legend><!--Legend helps to create a title for the form-->
                <label for="title">Title: </label><!--This creates the names-->
                <input type="text" id="title" name="title"><br>
                <div id="errortitle"></div>

                <label for="author">Author: </label>
                <input type="text" id ="author" name="author"><br>
                <div id="errorauthor"></div>

                <label for="year">Year: </label>
                <input type="text" id ="year" name="year"><br>
                <div id="erroryear"></div>

                <label for="genre">Genre: </label>
                <input type="text" id ="genre" name="genre"><br>
                <div id="errorgenre"></div>

                <label for="description">Description: </label>
                <textarea rows="4" cols="50" id="description" name="description"></textarea>
                <div id="errordesc"></div>

                <input type="submit" value="Submit">
                <input type="reset">

            </fieldset>
        </form>
        </main>
        <?php include ("footer.php") ?>
    </body>
</html>