<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;

$sql = "DELETE FROM quizzes WHERE id='$quiz_id'";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Quiz deleted successfully"]);
} else {
    echo json_encode(["error" => "Quiz deletion failed"]);
}
?>