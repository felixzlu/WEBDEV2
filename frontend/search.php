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
<!---Image source-->
    <img src="./Images_for_library/search.jpg">
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
   
    <!--This contains information about the privacy statements and Site map-->
    <footer>
        <ul>
        <li>Privacy statements</li>
        <li>Site map</li><!--Shows all the links to student library-->
        </ul>
        
    </footer>
</body>
</html>