<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link rel ="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
</head>
<body>
<?php include ("header.php") ?>
<main>
<fieldset>
    <legend>Advanced Search</legend>
    <label for ="title">Title: </label>
    <input type="title" id="title" name="title"><br>

    <label for="author">Author:</label>
    <input type="author" id="author" name="author"><br>

    <!--This gives the drop down menu optons -->
    <label for="Genre">Genre: </label>
    <select id="genre" name="genre">
    <option value="Science-Fiction">Science Fiction</option>
    <option value="non-fiction">Non Fiction</option>
    <option value="romance">Romance</option>
    <option value="comedy">Comedy</option>
    <option value="horror">Horror</option>
</select><br><br>
<button type="Submit">Search</button>
<button type="reset">Reset</button>
</fieldset>
</main>
   
<?php include ("footer.php") ?>
</body>
</html>