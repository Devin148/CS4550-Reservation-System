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
    // Include the navbar
    $current="reservations";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <!--
                Temp image, not mine, wish it were, getting my own soon enough..
                (But seemingly not before the project is over)
            -->
            <img src="images/club/seats.png" class="center" alt="Club SwimmFrog" />
            <?php
            if (isset($_POST["email"])) {
            ?>

            <h1>Your reservations</h1>

            <?php
                getReservations($_POST["email"]);
            } else {
            ?>

            <h1>Reservations</h1>
            <p>Club SwimmFrog offers fine an enjoyable club experience with weekly live performances,
                a fun atmosphere, friendly staff, and the best liquor in Boston.</p>
            <p>For booking large parties and avoiding lines,
                make a reservation today by calling us at (617)-373-4357 or
                filling out the reservation form on the right.</p>

            <h1>Already have a reservation?</h1>
            <p>If you’ve just requested a reservation please give us 24 hours to contact
                you via email to confirm or deny your reservation.</p>

            <p>If we have confirmed your reservation, input your email below
                to cancel or lookup the details of your reservation.</p>
            <form id="lookup" name="lookup" method="post" onsubmit="return validateLookup();" action="reservations.php">
                <label id="lookup" class="description" name="email" for="email"></label>
                <input id="email" name="email" type="text" maxlength="255" size="15" value="Email" />
                <input id="submit" class="button_text" type="submit" value="Submit" />
            </form>

            <?php
            }
            ?>
        </div>
        <div id="content_right">
            <h2 class="center">Reservation Request</h2>
            <hr />
            <?php include("form.php"); ?>
        </div>
    </div>

    <?php
    // Query for reservations and add them to the page in a table
    function getReservations($email) {
        // Create a mysqli connection
        include ("connect.php");

        // Create a prepared statement and bind the values
        $stmt = $mysqli->prepare("SELECT name, res_date, guests FROM reservations WHERE email=?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($name, $mysqldate, $guests);

        // Add the found reservations in a table
        if ($stmt->fetch() == null) {
            echo("<p>You do not have any reservations</p>");
        } else {
            echo("<table>");
            echo("<tr><td>Name</td><td>Date & Time</td><td>Number of Guests</td></tr>");
            do {
                echo("<tr>");
                echo("<td>" . $name . "</td>");
                echo("<td>" . $mysqldate . "</td>");
                echo("<td>" . $guests . "</td>");
                echo("</tr>");
            } while ($stmt->fetch());
            echo ("</table>");
        }

        return true;
    }

    ?>

    <script>
    function validateLookup() {
        // Get the email
        var email = document.forms["lookup"]["email"].value
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
        // Check if it's a real email
        if (re.test(email)) {
            return true;
        } else {
            $("label#lookup").css("color", "#F00");
            $("label#lookup").html("* Please enter a valid email");
            return false;   
        }
    }
    </script>
</body>
</html>