<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reservation</title>
    <link href="stylesheets/index.css" rel="stylesheet" type="text/css" />
	<link href="stylesheets/navbar.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="stylesheets/bjqs.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/view.css" media="all">
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>
    <script type="text/javascript" src="js/view.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
</head>

<body>
    <?php include("navbar.php"); ?>
    

	<div id="slideshow_wrapper">
		<div id="slideshow">
	        <ul class="bjqs">
	            <li><img src="images/slideshow/slide1.png"></li>
	            <li><img src="images/slideshow/slide2.png"></li>
	        </ul>
	    </div>
	</div>

	<script class="secret-source">
        jQuery(document).ready(function($) {

            $('#slideshow').bjqs({
                height      : 350,
                width       : 940,
                responsive  : false,
                showcontrols: false,
                showmarkers : false
            });

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

                <div id="form_container">
                    <form id="form_559839" class="appnitro"  method="post" action="">
                        <ul >
                            <li id="li_1" >
                                <label class="description" for="element_1">Name </label>
                                <span>
                                    <input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="7" value=""/>
                                    <label>First</label>
                                </span>
                                <span>
                                    <input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="12" value=""/>
                                    <label>Last</label>
                                </span> 
                            </li>
                            <li id="li_6" >
                                <label class="description" for="element_6">Email </label>
                                <div>
                                    <input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
                                </div> 
                            </li>
                            <li id="li_2" >
                                <label class="description" for="element_2">Date </label>
                                <span>
                                    <input id="element_2_1" name="element_2_1" class="element text" size="1" maxlength="2" value="" type="text"> /
                                    <label for="element_2_1">MM</label>
                                </span>
                                <span>
                                    <input id="element_2_2" name="element_2_2" class="element text" size="1" maxlength="2" value="" type="text"> /
                                    <label for="element_2_2">DD</label>
                                </span>
                                <span>
                                    <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
                                    <label for="element_2_3">YYYY</label>
                                </span>
                            
                                <span id="calendar_2">
                                    <img id="cal_img_2" class="datepicker" src="images/form/calendar.gif" alt="Pick a date.">   
                                </span>
                                <script type="text/javascript">
                                    Calendar.setup({
                                    inputField   : "element_2_3",
                                    baseField    : "element_2",
                                    displayArea  : "calendar_2",
                                    button       : "cal_img_2",
                                    ifFormat     : "%B %e, %Y",
                                    onSelect     : selectDate
                                    });
                                </script>
                                 
                            </li>
                            <li id="li_3" >
                                <label class="description" for="element_3">Time </label>
                                <span>
                                    <input id="element_3_1" name="element_3_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
                                    <label>HH</label>
                                </span>
                                <span>
                                    <input id="element_3_2" name="element_3_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
                                    <label>MM</label>
                                </span>
                                <span>
                                    <input id="element_3_3" name="element_3_3" class="element text " size="2" type="text" maxlength="2" value=""/>
                                    <label>SS</label>
                                </span>
                                <span>
                                    <select class="element select" style="width:4em" id="element_3_4" name="element_3_4">
                                        <option value="AM" >AM</option>
                                        <option value="PM" >PM</option>
                                    </select>
                                    <label>AM/PM</label>
                                </span> 
                            </li>
                            <li id="li_4" >
                                <label class="description" for="element_4">Number of Guests </label>
                                <div>
                                    <input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
                                </div> 
                            </li>
                            <li class="buttons">
                                <input type="hidden" name="form_id" value="559839" />
                                <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                            </li>
                        </ul>
                    </form> 
                    <div id="footer">
                        Generated by <a href="http://www.phpform.org">pForm</a>
                    </div>
                </div>
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