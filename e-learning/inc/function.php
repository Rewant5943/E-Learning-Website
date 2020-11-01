<?php
    function head_link(){
        include("inc/db.php");
        $get_link=$con->prepare("select * from contact");
        $get_link->setFetchMode(PDO::FETCH_ASSOC);
        $get_link->execute();
        $row=$get_link->fetch();

        echo"<ul>
                <li><a href='https://www.facebook.com/".$row['fb']."' target='_blank'><i class='fab fa-facebook-f'></i></a></li>
                <li><a href='https://www.twitter.com/".$row['tw']."' target='_blank'><i class='fab fa-twitter'></i></a></li>
                <li><a href='https://".$row['gp']."' target='_blank'><i class='fab fa-google-plus-g'></i></a></li>
                <li><a href='https://www.youtube.com/".$row['yt']."' target='_blank'><i class='fab fa-youtube'></i></a></li>
                <li><a href='https://www.linkedin.com/".$row['link']."' target='_blank'><i class='fab fa-linkedin-in'></i></a></li>
            </ul>";

    }

    function cat_menu(){
        include("inc/db.php");

        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO::FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"<li><a href='#'>".$row['cat_icon']." ".$row['cat_name']."</a></li>";
        endwhile;

    }

    function cat_home(){
        include("inc/db.php");

        $get_cat=$con->prepare("select * from cat");
        $get_cat->setFetchMode(PDO::FETCH_ASSOC);
        $get_cat->execute();
        while($row=$get_cat->fetch()):
            echo"<li>
                    <a href='#'>
                    <center>
                        ".$row['cat_icon']."
                        <h4>".$row['cat_name']."</h4>
                        <p>3</p>
                    </center>
                    </a>
                </li>";
        endwhile;

    }

    function cart(){
        include("inc/db.php");
        echO"<div id='wrap'>
                <div id='crumb'>
                    <span><a href='index.php'>Home</a></span> <b>></b>
                    <span>My Cart</span>
                </div>
                <div id='cart'>
                    <table cellspacing='0'>
                        <tr>
                            <th id='cart_f'>Name</th>
                            <th>Instructor</th>
                            <th>Lecture</th>
                            <th>Language</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td id='cart_f'>
                                <img src='imgs/courses/1.jpg' >
                                <span><a href='#'>NodeJs Course For Beginners</a></span><br clear'all'>
                                <b><a href='#'><i class='fas fa-trash'></i>Remove</a></b>
                            </td>
                            <td>Rewant Pandey</td>
                            <td>100</td>
                            <td>English</td>
                            <td>Rs 500</td>
                        </tr>
                        <tr>
                            <td>
                                <button><a href='index.php'>Keep Shopping</a></button>
                                <button><a href='#'>CheckOut</a></button>
                            </td>
                            <td></td><td></td>
                            <td style='text-align:right'>Amount Payable :</td>
                            <td>Rs. 500</td>
                        </tr>
                    </table>
                </div><br clear='all'>
           </div>";
    }

    function course_details(){
        include("inc/db.php");

        echo"<div id='crumb'>
                <span><a href='index.php'>Home</a></span> <b>></b>
                <span>My Cart</span>
            </div>
            <div id='course_left'>
                <img src='imgs/courses/1.jpg'>
                <div id='course_share'>
                    <center>
                        <div id='f'><a href='#'><i class='fab fa-facebook-f'></i> Share</a></div>
                        <div id='t'><a href='#'><i class='fab fa-twitter'></i> Share</a></div>
                        <div id='l'><a href='#'><i class='fab fa-linkedin-in'></i> Share</a></div>
                        <div id='w'><a href='#'><i class='fab fa-whatsapp'></i> Share</a></div>
                    </center>
                </div>
            </div>
            <div id='course_right'>
                <h2>NodeJs Course For Beginners</h2>
                <table>
                    <tr>
                        <td>Instructor</td>
                        <td>Rewant Pandey</td>
                    </tr>
                    <tr>
                        <td>Enroll By</td>
                        <td>9 Students</td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>Beginner Level</td>
                    </tr>
                    <tr>
                        <td>Language</td>
                        <td>English</td>
                    </tr>
                    <tr>
                        <td>Lectures</td>
                        <td>50</td>
                    </tr>
                </table>
                <div id='price'>
                    <h3>Price : Rs 350 <span>Rs 500</span> <b>70%</b> Saving Rs 150</h3>
                </div>
                <form>
                    <center>
                        <button><i class='fas fa-shopping-cart'></i>Add To Cart</button>
                        <div><a href='#'><i class='fas fa-shopping-bag'></i>Buy Now</a></div>
                    </center>
                </form>
            </div><br clear='all'>
            <div id='c_desc'>
                <h2>Course Details</h2>
                <p>Welcome to my Node.js course. In this course you will learn about Node.js from scratch. 
                   We will assume that you are a complete beginner and by the end of the course you will be at advanced level. 
                   This course contain Real-World examples and Hands On practicals. We will guide you step by step so that you can understand better. 
                   By using this comprehensive course you will learn the basics of Node.js, Some of the advanced methods of Node.js programming and much more.
                   In this course i will assume that you have no prior knowledge about Node.js and by the end of the course you will be at advanced level.
                   This course will guide you step by step so that you will learn basics and theory of every part.
                </p>
                <h2>What Will I Learn?</h2>
                <p>You'll Learn:Node.Js,Express.Js,MongoDB.At the End of this Course You'll be able to Build Realtime Application using Socket.io</p>
                <h2>Requirements</h2>
                <p>Students should have knowledge of Basic HTML,CSS and Javascript</p>
                <h2>Instructor</h2>
                <img src='imgs/courses/Rewant Pandey.jpeg'>
                
                <p>I am Professional Web Developer.As Developer I am enjoying creating system and website. 
                Because being a developer is not about making money.  It's all about doing what you love. </p>
                <div id='c_ins_link'>    
                    <div id='f'><a href='#'><i class='fab fa-facebook-f'></i></a></div>
                    <div id='t'><a href='#'><i class='fab fa-twitter'></i></a></div>
                    <div id='l'><a href='#'><i class='fab fa-linkedin-in'></i></a></div>
                    <div id='w'><a href='#'><i class='fab fa-whatsapp'></i></a></div>
                </div><br clear='all'>
                <h2>Curriculum</h2>
                <ul>
                    <li><i class='fas fa-video'></i> <span>1. Introduction</span></li>
                    <li><i class='fas fa-video'></i> <span>2. First App and Web Server</span></li>
                    <li><i class='fas fa-video'></i> <span>3. Command Lines and Console</span></li>
                    <li><i class='fas fa-video'></i> <span>4. Crypto,File System and Stream</span></li>
                    <li><i class='fas fa-video'></i> <span>5. Module</span></li>
                    <li><i class='fas fa-video'></i> <span>6. Basic app in Node Js</span></li>
                    <li><i class='fas fa-video'></i> <span>7. Express Js</span></li>
                    <li><i class='fas fa-video'></i> <span>8. MongoDB</span></li>
                    <li><i class='fas fa-video'></i> <span>9. Crud Express</span></li>
                </ul>

            </div>
            <div id='c_rel'>
                <h2>Related Courses</h2>
                <ul>
                    <li>
                        <a href='#'>
                            <img src='imgs/courses/7.jpg'>
                            <p>E-COMMERCE WEBSITE DEVELOPMENT IN PHP WITH PDO</p>
                        </a>
                    </li><br clear='all'>
                    <li>
                        <a href='#'>
                            <img src='imgs/courses/3.jpeg'>
                            <p>FULL STACK WEB DEVELOPER BOOTCAMP</p>
                        </a>
                    </li><br clear='all'>
                    <li>
                        <a href='#'>
                            <img src='imgs/courses/9.jpg'>
                            <p>FRONT-END WEB DEVELOPMENT COURSE</p>
                        </a>
                    </li>
                </ul>
            </div><br clear='all'>";


    }
?>