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
    $current="";
    include("navbar.php");
    ?>

    <div id="content">
        <div id="content_left">
            <?php
            $first = $_POST["first"];
            $last = $_POST["last"];
            $email = $_POST["email"];
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            $hour = $_POST["hour"];
            $minute = $_POST["minute"];
            $tod = $_POST["tod"];
            $guests = $_POST["guests"];
            ?>
            <h1 align="center">Thank you, <?=$first?>, for making a reservation!</h1>
            <p align="center">We will contact you within 24 hours to confirm your reservation.</p>

            <table align="center">
                <tr><th colspan="2">Reservation information</th></tr>
                <tr><td>Name:</td><td><?=$first?> <?=$last?></td></tr>
                <tr><td>Email:</td><td><?=$email?></td></tr>
                <tr><td>Date:</td><td><?=$day?>/<?=$month?>/<?=$year?></td></tr>
                <tr><td>Time:</td><td><?=$hour?>:<?=$minute?> <?=$tod?></td></tr>
                <tr><td>Number of guests:</td><td><?=$guests?></td></tr>
            </table>
        </div>
        <div id="content_right">
            <p> Right Content </p>
        </div>
    </div>
</body>
</html>