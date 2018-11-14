<?php

header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("192.168.1.44", "aleix", "12345", "nautic");
$stmt = $conn->prepare("SELECT client.dni,client.nom FROM client inner join vaixell on client.matricula=vaixell.matricula");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);