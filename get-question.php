<?php
include 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));
$quiz_id = $data->quiz_id;

$sql = "SELECT * FROM questions WHERE quiz_id='$quiz_id'";
$result = $conn->query($sql);

$questions = [];
while ($row = $result->fetch_assoc()) {
    $questions[] = $row;
}

echo json_encode($questions);
?>