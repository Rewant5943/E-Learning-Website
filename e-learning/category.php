<html>
    <head>
        <meta charset="utf-8">
        <title>E-Learning | Categories</title>
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1bf5ec61c2.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php 
            include("inc/header.php");
        ?>
        <div id='wrap'>
            <div id='cat_bodyleft'>
                <h2>Category</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-code"></i> Development</a></li>
                    <li><a href="#"><i class="fas fa-drafting-compass"></i> Design</a></li>
                </ul>
                <h2>Sub Category</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-code"></i> Development</a></li>
                    <li><a href="#"><i class="fas fa-drafting-compass"></i> Design</a></li>
                </ul>
            </div>
            <div id='cat_bodyright'>
                <div id='crumb'>
                    <span><a href='index.php'>Home</a></span> <b>></b>
                    <span>Development</span>
                </div>
                <h2>Web Development <span><a href="#"><i class="fas fa-arrow-right"></i></a></span></h2>
                <ul>
                    <li>
                        <a href="course_detail.php">
                            <img src="imgs/courses/1.jpg" alt="">
                            <h3>NodeJs Course for Beginners</h3>
                            <h4>Price: Rs 500</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/courses/2.jpeg" alt="">
                            <h3>Ultimate PHP and My SQL Web Development</h3>
                            <h4>Price: Rs 550</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/courses/8.jpg" alt="">
                            <h3>Designing Simple Website Using HTML and CSS</h3>
                            <h4>Price: Rs 150</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/courses/7.jpg" alt="">
                            <h3>E-Commerce Website Development in PHP with PDO</h3>
                            <h4>Price: Rs 399</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/courses/3.jpeg" alt="">
                            <h3>Full Stack Web Developer Bootcamp</h3>
                            <h4>Price: Rs 700</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="imgs/courses/9.jpg" alt="">
                            <h3>Front-End Web Development Course</h3>
                            <h4>Price: Rs 700</h4>
                            <h5>Teacher's Name: Rewant Pandey</h5>
                        </a>
                    </li><br clear='all' />
                </ul>
            </div><br clear='all'>
        <?php
            include("inc/footer.php");
        ?>
        </div>
    </body>
</html>