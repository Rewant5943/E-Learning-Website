<html>
    <head>
        <meta charset="utf-8">
        <title>E-Learning | Course_Edit</title>
        <link rel="stylesheet" href="css/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1bf5ec61c2.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php 
            include("inc/header.php");
        ?>
        <div id='wrap'>
            <div id='c_edit_l'>
                <h2>Course Management</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-edit"></i> Title & Image</a></li>
                    <li><a href="#"><i class="fas fa-bullseye"></i> Course Goal</a></li>
                    <li><a href="#"><i class="fas fa-book"></i> Course Details</a></li>
                    <li><a href="#"><i class="fas fa-dollar-sign"></i> Course Price</a></li>
                    <li><a href="#"><i class="fas fa-book-open"></i> Curriculum</a></li>
                </ul>
                <button>Submit For Review</button>
            </div>
            <div id='c_edit_r'>
                <div id='crumb'>
                    <span><a href='index.php'>Home</a></span> <b>></b>
                    <span>DashBoard</span> <b>></b>
                    <span>Graphic Design Crash Course</span>
                </div>
                <h2>Course Title</h2>
                <form method="post">
                    <div id='c_edit_input'>
                        <input type="text" name='c_name' placeholder='Enter Course Name'>
                        <p>100</p>
                    </div><br clear='all'>
                    <h2>Course Image</h2>
                    <img src="imgs/courses/4.jpeg" alt="">
                    <span>Graphic Design Crash Course</span>
                    <input id='c_img' type="file" name='c_img'>
                    <button>Save</button>
                </form>
            </div>
        </div>
    </body>
</html>