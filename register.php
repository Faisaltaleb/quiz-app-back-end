<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$email = $data->email;
$password = password_hash($data->password, PASSWORD_DEFAULT); 

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Registration successful"]);
} else {
    echo json_encode(["error" => "Registration failed"]);
}
?>