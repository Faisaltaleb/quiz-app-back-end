<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$description = $data->description;
$created_by = $data->created_by;

$sql = "INSERT INTO quizzes (title, description, created_by) VALUES ('$title', '$description', '$created_by')";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Quiz created successfully"]);
} else {
    echo json_encode(["error" => "Quiz creation failed"]);
}
?>