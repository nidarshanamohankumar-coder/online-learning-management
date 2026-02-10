<?php
$host = "dpg-d65chdd6ubrc73912ojg-a";
$port = "5432";
$dbname = "register_9hrv";
$user = "users";
$password = "XEsVvJGs4RzC6K7RGYO54p7N2ei5JXRW";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed");
}
?>
