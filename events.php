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
    <script src="js/view.js" type="text/javascript"></script>
    <script src="js/calendar.js" type="text/javascript"></script>
</head>

<body>

    <?php
    $current="events";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <p> Left Content </p>
        </div>
        <div id="content_right">
            <p> Right Content </p>
        </div>
    </div>
</body>
</html>