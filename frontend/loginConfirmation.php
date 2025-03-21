<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
    <title>Confirmation of Login</title>
</head>
<body>
    <?php include ("header.php") ?>
    <?php $username = $_GET['username'];?>
    Welcome <?php echo $username?>. You have successfully logged in.
    <?php include ("footer.php") ?>
</body>
</html>