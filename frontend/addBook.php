<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>addBooks</title>
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./frontend/js/script.js"></script>
    </head>
    <body>
        <?php include ("header.php") ?>
        <form action="./addBook2.php" method="POST">
            <fieldset><!--Helps in grouping all the elements together-->
                <legend>ADD BOOK TO DATABASE</legend><!--Legend helps to create a title for the form-->
                <label for="title">Title: </label><!--This creates the names-->
                <input type="text" id="title" name="title"><br>

                <label for="author">Author: </label>
                <input type="text" id ="author" name="author"><br>

                <label for="year">Year: </label>
                <input type="text" id ="year" name="year"><br>

                <label for="genre">Genre: </label>
                <input type="text" id ="genre" name="genre"><br>

                <label for="description">Description: </label>
                <textarea rows="4" cols="50" id="description" name="description"></textarea>

                <input type="submit" value="Submit">
                <input type="reset">

            </fieldset>
        </form>
        <?php include ("footer.php") ?>
    </body>
</html>