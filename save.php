<?php
header("Content-Type: application/json");

// include Neon DB connection
include "db.php";

// get form values
$user_name  = $_POST['user_name'] ?? '';
$role       = $_POST['role'] ?? '';
$year       = $_POST['year'] ?? '';
$department = $_POST['department'] ?? '';
$college    = $_POST['college'] ?? '';
$email      = $_POST['email'] ?? '';
$password   = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
$phone      = $_POST['phone'] ?? '';

// PostgreSQL insert query
$sql = "INSERT INTO users
(user_name, role, year, department, college, email, password, phone)
VALUES ($1,$2,$3,$4,$5,$6,$7,$8)";

$result = pg_query_params($conn, $sql, [
  $user_name,
  $role,
  $year,
  $department,
  $college,
  $email,
  $password,
  $phone
]);

if ($result) {
  echo json_encode(["status" => "success"]);
} else {

  $error = pg_last_error($conn);

  if (str_contains($error, "email")) {
    echo json_encode(["status" => "email_exists"]);
  } elseif (str_contains($error, "phone")) {
    echo json_encode(["status" => "phone_exists"]);
  } else {
    echo json_encode(["status" => "error"]);
  }
}
?>
