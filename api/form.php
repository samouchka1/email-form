<?php
require "../config.php";

// Get email from request body
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$email = $data->email;

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $response = array('success' => false, 'message' => 'Invalid email address');
  echo json_encode($response);
  exit;
}

// Insert email into database
$sql = "INSERT INTO emails (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
  $response = array('success' => true);
} else {
  $response = array('success' => false, 'message' => $conn->error);
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($response);

?>