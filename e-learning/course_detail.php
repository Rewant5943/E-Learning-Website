<html>
    <head>
        <meta charset="utf-8">
        <title>E-Learning | Course Details</title>
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1bf5ec61c2.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php include("inc/header.php");  ?>
        <div id='wrap'>
            <?php 
                echo course_details();
                include("inc/footer.php"); 
            ?>
        </div>
    </body>
</html>