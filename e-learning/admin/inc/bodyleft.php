<div id='bodyleft'>
    <h3>Categories Management</h3>
    <ul>
        <li><a href="index.php"><i class="fas fa-home"></i>DashBoard</a></li>
        <li><a href="index.php?cat"><i class="fas fa-th"></i>View Categories </a></li>
        <li><a href="index.php?sub_cat"><i class="fas fa-columns"></i>View Sub Categories</a></li>
        <li><a href="index.php?lang"><i class="fas fa-language"></i>View Languages</a></li>

    </ul>

    <h3>Course Management</h3>
    <ul>
        <li><a href="#"><i class="fas fa-book"></i>Active Courses</a></li>
        <li><a href="#"><i class="fab fa-discourse"></i>Pending Courses </a></li>
        <li><a href="#"><i class="fas fa-pause"></i>Unpublished Courses</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Advance Course Search</a></li>

    </ul>

    <h3>User Management</h3>
    <ul>
        <li><a href="#"><i class="fas fa-user-graduate"></i>View All Students</a></li>
        <li><a href="#"><i class="fas fa-chalkboard-teacher"></i>View All Teachers</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Advance User Search</a></li>
    </ul>

    <h3>Payment Management</h3>
    <ul>
        <li><a href="#"><i class="fab fa-paypal"></i>Pay to Instructor</a></li>
        <li><a href="#"><i class="fas fa-shopping-cart"></i>Complete Payment</a></li>
        <li><a href="#"><i class="fas fa-search"></i>Advance Payment Searching</a></li>
    </ul>

    <h3>Pages Management</h3>
    <ul>
        <li><a href="index.php?terms"><i class="fas fa-paper-plane"></i>Terms & Condition Page</a></li>
        <li><a href="index.php?about"><i class="fas fa-info"></i>About Us</a></li>
        <li><a href="index.php?contact"><i class="fas fa-phone-alt"></i>Contact Us</a></li>
        <li><a href="index.php?faqs"><i class="fas fa-question"></i>FAQs Page</a></li>
        <li><a href="#"><i class="fas fa-sliders-h"></i>Slider Management</a></li>
    </ul>
</div>

<?php
    if(isset($_GET['cat'])){
        include("cat.php");

    }

    if(isset($_GET['lang'])){
        include("lang.php");

    }

    if(isset($_GET['sub_cat'])){
        include("sub_cat.php");

    }

    if(isset($_GET['terms'])){
        include("terms.php");
    }

    if(isset($_GET['contact'])){
        include("contact.php");
    }

    if(isset($_GET['faqs'])){
        include("faqs.php");
    }

    if(isset($_GET['about'])){
        include("about.php");
    }
?>