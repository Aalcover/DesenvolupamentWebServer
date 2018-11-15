<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("10.100.65.33", "aleix", "12345", "nautic");
$conn->set_charset('utf8');
$stmt = $conn->prepare("SELECT * FROM provincia");
if(isset($_REQUEST['provid'])){
	$stmt = $conn->prepare("SELECT * FROM provincia WHERE id=".$_REQUEST['provid']);
}
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp, JSON_UNESCAPED_UNICODE);
