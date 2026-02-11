<?php
$conn = pg_connect("host=ep-bitter-king-aiocqno2-pooler.c-4.us-east-1.aws.neon.tech port=5432 dbname=neondb user=neondb_owner password=psql 'postgresql://neondb_owner:npg_qsL2NcjP3roS@ep-bitter-king-aiocqno2-pooler.c-4.us-east-1.aws.neon.tech/neondb?sslmode=require&channel_binding=require' sslmode=require");

if (!$conn) {
    die("Database connection failed!");
}
?>
