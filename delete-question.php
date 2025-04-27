<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));
$question_id = $data->question_id;

$sql = "DELETE FROM questions WHERE id='$question_id'";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Question deleted successfully"]);
} else {
    echo json_encode(["error" => "Question deletion failed"]);
}
?>