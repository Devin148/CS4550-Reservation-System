<?php
// Example connection
$mysqli = new mysqli("localhost", "local_user", "local_pass");
if ($mysqli->connect_errno) {
    print "Failed to connect to db: " . $mysqli->connect_error;
    exit();
}
// Example database
$mysqli->select_db("my_db");