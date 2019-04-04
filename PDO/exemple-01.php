<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=DESKTOP-DCI4ELM\SQLEXPRESS;ConnectionPooling=0", "sa", "123456");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY desslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results)
?>