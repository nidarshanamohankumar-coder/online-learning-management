<?php
$host = "dpg-d65chdd6ubrc73912ojg-a";
$dbname = "register_9hrv";
$user = "users";
$password = "XEsVvJGs4RzC6K7RGYO54p7N2ei5JXRW";
$port = "5432";

$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$user password=$password"
);

if (!$conn) {
    die("Database connection failed");
}
?>
