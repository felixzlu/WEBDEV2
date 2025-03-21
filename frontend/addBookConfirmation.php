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
    <?php echo $title?> was successfully added to the database.
    <?php include ("footer.php") ?>
</body>
</html>