<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reservation</title>
    <link href="stylesheets/index.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/navbar.css" rel="stylesheet" type="text/css" />
    <link href="stylesheets/view.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="js/slideshow.js" type="text/javascript"></script>
    <script src="js/form.js" type="text/javascript"></script>
</head>

<body>

    <?php
    $current="home";
    include("navbar.php");
    ?>
    
	<div id="slideshow_wrapper">
		<div id="slideshow">
	        <ul id="slides">
	            <li><img src="images/slideshow/slide1.png" alt="Club SwimmFrog"></li>
                <li><img src="images/slideshow/slide2.png" alt="Club SwimmFrog"></li>
                <li><img src="images/slideshow/slide3.png" alt="Club SwimmFrog"></li>
	            <li><img src="images/slideshow/slide4.png" alt="Club SwimmFrog"></li>
	        </ul>
	    </div>
	</div>

	<script>
        jQuery(document).ready(function() {

            $(this).Slideshow();

        });
    </script>

    <div id="content">
    	<div class="left">
    		<div class="subcontent">
                <h1>about us</h1>
                <hr />

                <div class="section">
                    <div class="icon">
                        <img src="images/icons/home.png" alt="Address">
                    </div>
                    <p class="info">
                        450 Parker St Boston, MA, 02115
                    </p>
                </div>

                <div class="section">
                    <div class="icon">
                        <img src="images/icons/phone.png" alt="Phone Number">
                    </div>
                    <p class="info">
                        (617)-373-4357
                    </p>
                </div>

                <div class="section">
                    <div class="icon">
                        <img src="images/icons/email.png" alt="Email">
                    </div>
                    <p class="info">
                        hurd.de@husky.neu.edu
                    </p>
                </div>
    		</div>
    	</div>
    	<div class="middle">
    		<div class="subcontent">
                <h1>reservations</h1>
                <hr />
                <?php include("form.php"); ?>
    		</div>
    	</div>
    	<div class="right">
    		<div class="subcontent">
                <h1>find us on...</h1>
                <hr />

                <div class="section">
                    <div class="icon">
                        <img src="images/icons/twitter.png" alt="Twitter">
                    </div>
                    <p class="info">
                        @Club_Handle
                    </p>
                </div>

                <div class="section">
                    <div class="icon">
                        <img src="images/icons/fb.png" alt="Facebook">
                    </div>
                    <p class="info">
                        Club_Name
                    </p>
                </div>
    		</div>
    	</div>

    	<div class="clear"></div>
    </div>
</body>
</html>