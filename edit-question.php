<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));
$question_id = $data->question_id;
$question_text = $data->question_text;

$sql = "UPDATE questions SET question_text='$question_text' WHERE id='$question_id'";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Question updated successfully"]);
} else {
    echo json_encode(["error" => "Question update failed"]);
}
?>