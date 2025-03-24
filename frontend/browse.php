<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Browse</title>
        <link rel ="stylesheet" href= "./css/style.css">
        <script src="./js/script.js"></script>
    </head>
    <body>
        <header>
        <?php include ("header.php") ?>
        </header>
        <main>
            <!--Wrapper for all sections-->
            <div class ="browse-container">
                <!--Wrapper for new additions section-->
                <div class = "Browse">
                    <h2>New Additions</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Book1</td>
                                <td>Description of the book</td>
                                </tr>
                                <tr>
                                    <td>Book2</td>
                                    <td>Description of the book</td>

                                </tr>
                                <tr>
                                    <td>Book2</td>
                                    <td>Description of the book</td>

                                </tr>
                            </tbody>
                        </table>
                        <h2>Overall Top picks</h2>
                        <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Book1</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book2</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book3</td>
                                <td>Description of the book</td>
                            </tr>
                        </tbody>
                        </table>
                        <h2>Top Genres</h2>
                        <h3>Science Fiction</h3>
                        <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Book1</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book2</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book3</td>
                                <td>Description of the book</td>
                            </tr>
                        </tbody>
                        </table>
                        <h3>Romance</h3>
                        <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Book1</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book2</td>
                                <td>Description of the book</td>
                            </tr>
                            <tr>
                                <td>Book3</td>
                                <td>Description of the book</td>
                            </tr>
                        </tbody>
                        </table>         
            </div>
        </main>
<footer> <!--This contains information about the privacy statements and Site map-->
<?php include ("footer.php") ?>
</footer>
   
    </body>
</html>