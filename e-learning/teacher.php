<html>
    <head>
        <meta charset="utf-8">
        <title>E-Learning | Instructor</title>
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1bf5ec61c2.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php 
            include("inc/header.php");
        ?>
        <div id='wrap'>
            <div id='crumb'>
                <span><a href='index.php'>Home</a></span> <b>></b>
                <span>DashBoard</span>
            </div>
            <div id='dash'>
                <h2>Instructor DashBoard</h2>
                <form method="post">
                    <div id='c_form'>
                        <input type="text" name="c_name" placeholder="Enter Course Name Here">
                        <button name="add_course">Create Course</button>
                    </div>
                </form><br clear='all'>
                <table cellpadding="0" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th>Course Type</th>
                    <th>Course Price</th>
                    <th>Course Status</th>
                    <th>Enroll By</th>
                    <th>Total Earn</th>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/courses/4.jpeg" alt=""></a></td>
                    <td>
                        <span>
                            <a href="#">Graphic Design Crash Course</a>
                        </span><br><br>
                        <a href="#"><i class="far fa-edit"></i> Edit</a>
                    </td>
                    <td>Paid</td>
                    <td>Rs 399</td>
                    <td>Active</td>
                    <td>8</td>
                    <td>Rs 3192</td>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/courses/2.jpeg" alt=""></a></td>
                    <td>
                        <span>
                            <a href="#">Ultimate PHP and My SQL Web Development</a>
                        </span><br><br>
                        <a href="#"><i class="far fa-edit"></i> Edit</a>
                    </td>
                    <td>Paid</td>
                    <td>Rs 550</td>
                    <td>Active</td>
                    <td>5</td>
                    <td>Rs 2750</td>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/courses/8.jpg" alt=""></a></td>
                    <td>
                        <span>
                            <a href="#">Designing a Simple Website Using HTML annd CSS</a>
                        </span><br><br>
                        <a href="#"><i class="far fa-edit"></i> Edit</a>
                    </td>
                    <td>Free</td>
                    <td>Rs 150</td>
                    <td>Active</td>
                    <td>20</td>
                    <td>Rs 3000</td>
                </tr>
            </table>
            </div><br clear='all'>
            
        <?php
            include("inc/footer.php");
        ?>
        </div>
    </body>
</html>