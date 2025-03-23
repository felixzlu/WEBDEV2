<!--Thinsgs need to be done
1)Add more books
2)Make the book tiles more dynamic using javascript
3)Arrange the books using the css and to style it.-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
    <link rel ="stylesheet" href="./css/style.css">
    <script src= "./js/script.js"></script>
</head>
<body>
<header><?php include ("header.php") ?>
</header>
<main>
    <div class="container">
        <h2>Library Book List</h2>
        <table>
            <thead><!---This designs the columns for the table-->
<tr>
    <th>#</th>
    <th>Book Title</th>
    <th>Author</th>
    <th>Genre</th>
    <th>Year</th>
    <th>Rating</th>
    </tr>
        </thead>
        <tbody>
            <tr><!----This is the table row for each book-->
                <td>1</td>
                <td>Harry Potter and the Philosophers Stone </td>
                <td>J.K.ROwling</td>
                <td>Fantasy</td>
                <td>1997</td>
                <td>******</td><!--Note, the rating we can add or remove it-->
            </tr>
            <tr>
                <td>2</td>
                <td>Harry Potter and the Chamber of Secrets </td>
                <td>J.K.ROwling</td>
                <td>Fantasy</td>
                <td>1998</td>
                <td>******</td><!--Note, the rating we can add or remove it-->
            </tr>
            <tr>
                <td>3</td>
                <td>Pride and Prejudice </td>
                <td>Jane Austen</td>
                <td>Romance</td>
                <td>1813</td>
                <td>******</td><!--Note, the rating we can add or remove it-->
            </tr>
            <tr>
                <td>4</td>
                <td>Treasure island </td>
                <td>Robert Louis Stevenson</td>
                <td>Adventure</td>
                <td>1883</td>
                <td>******</td><!--Note, the rating we can add or remove it-->
            </tr>
            <tr>
                <td>5</td>
                <td>A brief history of Time </td>
                <td>Stephen Hawking</td>
                <td>Science</td>
                <td>1988</td>
                <td>******</td><!--Note, the rating we can add or remove it-->
            </tr>
        </tbody>
    </table>
   
    </div>
</main>
   <footer>
<!--This contains information about the privacy statements and Site map-->
<?php include ("footer.php") ?>
   </footer>  
</body>
</html>