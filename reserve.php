<?php
// If email isn't set, the user went to this page without the form
// so lets send them to the reservations page
if (!isset($_POST["email"])) {
	header("Location: reservations.php");
	exit;
}
?>
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
    // Include the navbar, with no page set as current
    $current="";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <?php
            // Get all the post vars
            $first = $_POST["first"];
            $last = $_POST["last"];
            $name = $first." ".$last;

            $email = $_POST["email"];

            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];

            $hour = $_POST["hour"];
            $minute = $_POST["minute"];
            $tod = $_POST["tod"];

            $guests = $_POST["guests"];

            // Setup an email to myself (the club owner)
            $to = "devinhurd@gmail.com";
            $subject = "RESERVATION REQUEST - ".$name.": ".$email; 
            $body = "From: ".$name."\n\n".
                    "Email: ".$email."\n\n".
                    "Date: ".$day."/".$month."/".$year."\n\n".
                    "Time: ".$hour.":".$minute." ".$tod."\n\n".
                    "Number of guests: ".$guests;
            // And setup one to send to the client
            $clientSubject = "Do not reply - Club SwimmFrog";
            $clientBody = "Thank you for making a reservation. Below is your reservation information. We will contact you within 24 hours to confirm your reservation.\n\n\n\n" . $body;

            // Check to make sure I get the email, and the reservation is added to the DB
            if (mail($to, $subject, $body) && saveReservation($name, $email, $day, $month, $year, $hour, $minute, $tod, $guests)) {
                // If so, send an emial to the client and display a success message
                mail($email, $clientSubject, $clientBody);
            ?>
                <h1 align="center">Thank you, <?=$first?>, for making a reservation!</h1>
                <p align="center">We will contact you within 24 hours to confirm your reservation.</p>
                <p align="center">To view or cancel your reservation, please visit our reservations page.</p>
            <?php
            // If it fails, let the client know
            } else {
            ?>
                <h1 align="center">We were unable to book your reservation due to technical difficulties.</h1>
                <p align="center">Please give us a call at 1-617-373-4357 to book your reservation.</p>
                <p align="center">We're very sorry for this inconvenience.</p>
            <?php
            }
            ?>

            <table align="center">
                <tr><th colspan="2">Reservation information</th></tr>
                <tr><td>Name:</td><td><?=$first?> <?=$last?></td></tr>
                <tr><td>Email:</td><td><?=$email?></td></tr>
                <tr><td>Date:</td><td><?=$month?>/<?=$day?>/<?=$year?></td></tr>
                <tr><td>Time:</td><td><?=$hour?>:<?=$minute?> <?=$tod?></td></tr>
                <tr><td>Number of guests:</td><td><?=$guests?></td></tr>
            </table>
        </div>
        <div id="content_right">
            <p> Right Content </p>
        </div>
    </div>

    <?php
    // Save a reservation to the DB and return if successful
    function saveReservation($name, $email, $day, $month, $year, $hour, $minute, $tod, $guests) {
        // Create a new mysqli connection
        $mysqli = new mysqli("swimmfrogcom.ipagemysql.com","res_user","res_pass");
        if ($mysqli->connect_errno) {
            echo("failed to connect to db: " . $mysqli->connect_error);
            return false;
        }

        // Change the form date to the mysql format
        $date = $day."/".$month."/".$year;
        $time = $hour.":".$minute." ".$tod;
        $datetime = new DateTime($date . " " . $time);
        $mysqldate = $datetime->format("Y-m-d H:i:s");

        // Select the reservation database
        $mysqli->select_db("swimmfrog_res");

        // Create a prepared statement to avoid SQL injections
        if (!($stmt = $mysqli->prepare("INSERT INTO reservations(name, email, res_date, guests)
            VALUES(?, ?, ?, ?)"))) {
            return false;
        }

        // Bind the vars into the prepared statement
        if (!$stmt->bind_param('sssi', $name, $email, $mysqldate, $guests)) {
            return false;
        }

        // Execute the insert
        if (!$stmt->execute()) {
            return false;
        }

        return true;
    }

    ?>
</body>
</html>