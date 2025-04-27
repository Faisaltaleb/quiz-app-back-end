<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$quiz_id = $data->quiz_id;
$question_text = $data->question_text;

$sql = "INSERT INTO questions (quiz_id, question_text) VALUES ('$quiz_id', '$question_text')";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Question added successfully"]);
} else {
    echo json_encode(["error" => "Question creation failed"]);
}
?>