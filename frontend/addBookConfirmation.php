<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addBookconfirmation.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <title>Confirmation: Book Added</title>
</head>
<body>
    <?php include ("header.php") ?>
    <?php $title = $_GET['title'];?>
    <main>
    <?php echo $title?> was successfully added to the database.
    </main>
    <?php include ("footer.php") ?>
</body>
</html>