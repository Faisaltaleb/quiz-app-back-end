<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$title = $data->title;
$description = $data->description;

$sql = "UPDATE quizzes SET title='$title', description='$description' WHERE id='$quiz_id'";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Quiz updated successfully"]);
} else {
    echo json_encode(["error" => "Quiz update failed"]);
}
?>