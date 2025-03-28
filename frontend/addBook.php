<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addBook.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!---This is the html to add a book to the database-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>addBooks</title>
<!---External link to add the css stylesheet-->
        <link rel ="stylesheet" href="./css/style.css">
<!---External link to add the javascript-->
        <script src="./js/scriptAddBook.js" defer></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <main>
        <form action="./addBook2.php" method="POST" onsubmit="return validate();">
            <fieldset><!--Helps in grouping all the elements together-->
                <legend>ADD BOOK TO DATABASE</legend><!--Legend helps to create a title for the form-->

                <!--Input field for the book title-->
                <label for="title">Title: </label><!--This creates the names-->
                <input type="text" id="title" name="title"><br>
                <div id="errortitle"></div>
               <!--Input field for the author title-->
                <label for="author">Author: </label>
                <input type="text" id ="author" name="author"><br>
                <div id="errorauthor"></div>
                <!--Input field for the year title-->
                <label for="year">Year: </label>
                <input type="text" id ="year" name="year"><br>
                <div id="erroryear"></div>
                <!--Input field for the Genre title-->
                <label for="genre">Genre: </label>
                <input type="text" id ="genre" name="genre"><br>
                <div id="errorgenre"></div>
                <!--Input field for the Desciption title-->
                <label for="description">Description: </label>
                <textarea rows="4" cols="50" id="description" name="description"></textarea>
                <div id="errordesc"></div>
                <!--submit button to send the form data-->
                <input type="submit" value="Submit">
                <!--Reset button to clear all input fields-->
                <input type="reset">

            </fieldset>
        </form>
        </main>
        <?php include ("footer.php") ?>
    </body>
</html>