<?php
header("Content-Type: application/json");

// connect Neon database
include "db.php";

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// find user by email
$sql = "SELECT user_name, role, password FROM users WHERE email = $1";
$result = pg_query_params($conn, $sql, [$email]);

if (!$result || pg_num_rows($result) === 0) {
    echo json_encode(["status" => "no_user"]);
    exit;
}

$user = pg_fetch_assoc($result);

// verify password
if (password_verify($password, $user['password'])) {
    echo json_encode([
        "status" => "success",
        "user_name" => $user['user_name'],
        "role" => $user['role']
    ]);
} else {
    echo json_encode(["status" => "wrong_password"]);
}
?>
