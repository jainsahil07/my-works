<?php
$dbhost = "166.62.27.191";
$dbuser = "sahil07";
$dbpass = "sahil07";
$dbname = "webstrike";

// Create connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>