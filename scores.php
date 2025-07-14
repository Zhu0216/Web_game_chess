<?php
$db = new PDO('sqlite:chessScore.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $db->query("SELECT name, score, created_at FROM scores ORDER BY score DESC LIMIT 10");
$data = $result->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($data);
