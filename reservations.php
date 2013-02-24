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
</head>

<body>

    <?php
    $current="reservations";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <h1>Reservations</h1>
            <?php
            if (isset($_POST["email"])) {
            ?>

            <h3>Your reservations</h3>

            <?php
                getReservations($_POST["email"]);
            } else {
            ?>

            <h3>Reservation lookup</h3>
            <form name="lookup" method="post" onsubmit="return validateEmail();" action="reservations.php">
                <label id="email" class="description" name="email" for="email">Email</label>
                <input id="email" name="email" type="text" maxlength="255" size="15" value="" />
                <input id="submit" class="button_text" type="submit" value="Submit" />
            </form>

            <?php
            }
            ?>
        </div>
        <div id="content_right">
            <h2>Twitter @Club_Swimmfrog</h2>
            <p>Tweet</p>
        </div>
    </div>

    <?php

    function getReservations($email) {
        $mysqli = new mysqli("swimmfrogcom.ipagemysql.com","res_user","res_pass");
        if ($mysqli->connect_errno) {
            echo("failed to connect to db: " . $mysqli->connect_error);
            return false;
        }

        $mysqli->select_db("swimmfrog_res");

        $stmt = $mysqli->prepare("SELECT name, res_date, guests FROM reservations WHERE email=?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($name, $mysqldate, $guests);
        echo ("<table>");
        echo("<tr><td>Name</td><td>Date & Time</td><td>Number of Guests</td></tr>");
        while ($stmt->fetch()) {
            echo("<tr>");
            echo("<td>" . $name . "</td>");
            echo("<td>" . $mysqldate . "</td>");
            echo("<td>" . $guests . "</td>");
            echo("</tr>");
        }
        echo ("</table>");

        return true;
    }

    ?>

    <script>
    function validateEmail() {
        // Get the email
        var email = document.forms["lookup"]["email"].value
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        // Check if it's a real email
        if (re.test(email)) {
            return true;
        } else {
            $("label#email").css("color", "#F00");
            $("label#email").html("* Please enter a valid email");
            return false;   
        }
    }
    </script>
</body>
</html>