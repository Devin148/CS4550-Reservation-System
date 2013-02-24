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
    $current="reservations";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <h1>Reservations</h1>
            <h3>Reservation lookup</h2>
            <form name="lookup" method="post" onsubmit="return validateEmail(document.forms["lookup"]["email"].value);" action="lookup.php">
                <label for="email">Email:</label>
                <input id="email" name="email" type="text" maxlength="255" size="15" value="" />
                <input id="submit" class="button_text" type="submit" value="Submit" />
            </form>

            <h3>Make a reservation</h2>
        </div>
        <div id="content_right">
            <h2>Twitter @Club_Swimmfrog</h2>
            <p>Tweet</p>
        </div>
    </div>
</body>
</html>