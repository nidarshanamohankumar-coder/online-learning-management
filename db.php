<?php
$conn = pg_connect("host=ep-bitter-king-aiocqno2-pooler.c-4.us-east-1.aws.neon.tech port=5432 dbname=neondb user=neondb_owner password=npg_gG0mNtbo3PEO sslmode=require");

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}
?>
