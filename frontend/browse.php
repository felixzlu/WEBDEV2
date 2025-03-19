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
        <img src="./Images_for_library/Browse.jpg">

            <!--Wrapper for all sections-->
            <div class ="browse-container">
                <!--Wrapper for new additions section-->
                <div class = "Browse">
                    <h2>New Additions</h2>
                        <div class ="book">
                        <img src="./" alt="Book1" >
                        <div class="book-info">
                            <p class ="Book-Title">Book1</ps>
                            <p class ="Description">Description of the book</p>
                        </div>  
                    </div>
                        <div class ="book">
                        <img src="./" alt="Book2" >
                        <div class="book-info">
                            <p class ="Book-Title">Book2</p>
                            <p class ="Description">Description of the book</p>
                        </div>  
                    </div>
                <div class ="book">
                    <img src="./" alt="Book3" >
                    <div class="book-info">
                        <p class ="Book-Title">Book3</p>
                        <p class ="Description">Description of the book</p>
                    </div>  
                </div>
            </div>
            <!--Wrapper for overall top picks-->
            <div class="Browse">
                <h2>Overall Top Picks</h2>
                    <div class="book">
                    <img src="" alt ="Book1">
                    <div class="book-info">
                        <p class="Book-Title">Book1</p>
                        <p class="Description">Description of the book</p>
                    </div>
                    </div>
                    <div class="book">
                        <img src="" alt ="Book1">
                        <div class="book-info">
                            <p class="Book-Title">Book1</p>
                            <p class="Description">Description of the book</p>
                        </div>
                        </div>
                        <div class="book">
                            <img src="" alt ="Book1">
                            <div class="book-info">
                                <p class="Book-Title">Book1</p>
                                <p class="Description">Description of the book</p>
                            </div>
                            </div>
                </div>
            
                    <!--Top Genres Section-->
                    <div class="Browse">
                        <h2>Top Genres</h2>
                        <!--Science fiction-->
                            <div class="genre">
                                <h3>Science Fiction</h3>
                                <div class ="book">
                            <img src="" alt ="Book1">
                            <div class="book-info">
                                <p class="Book-Title">Book1</p>
                                <p class="Description">Description of the book</p>
                            </div>
                            </div>
                            <div class="book">
                                <img src="" alt ="Book1">
                                <div class="book-info">
                                    <p class="Book-Title">Book1</p>
                                    <p class="Description">Description of the book</p>
                                </div>
                                </div>
                                <div class="book">
                                    <img src="" alt ="Book1">
                                    <div class="book-info">
                                        <p class="Book-Title">Book1</p>
                                        <p class="Description">Description of the book</p>
                                </div>
                            </div>
                        </div>
                        <!--Romance-->
                        <div class="genre">
                            <h3>Romance</h3>
                            <div class="book">
                                <img src="" alt="book1">
                                <div class="book-info">
                                    <p class="Book-Title">Book2</p>
                                    <p class="Description">Description of the book</p>
                                </div>
                            </div>
                        </div>
                            <div class="book">
                                <img src="" alt="book2">
                                <div class="book-info">
                                    <p class="Book-Title">Book2</p>
                                    <p class="Description">Description of the book</p>
                                </div>
                            </div>
                            <div class="book">
                                <img src="" alt="book3">
                                <div class="book-info">
                                    <p class="Book-Title">Book3</p>
                                    <p class="Description">Description of the book</p>
                                </div>
                            </div>
                        </div>
            </div>
        </main>

    <!--This contains information about the privacy statements and Site map-->
    <?php include ("footer.php") ?>
    </body>
</html>