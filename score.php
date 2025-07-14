<?php
$db = new PDO('sqlite:chessScore.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 建立分數表（如果不存在）
$db->exec("CREATE TABLE IF NOT EXISTS scores (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    score INTEGER NOT NULL,
    created_at TEXT DEFAULT CURRENT_TIMESTAMP
)");

$name = $_POST['name'] ?? 'Player';
$score = intval($_POST['score'] ?? 0);

$stmt = $db->prepare("INSERT INTO scores (name, score) VALUES (?, ?)");
$stmt->execute([$name, $score]);

echo "已儲存：$name - $score";
file_put_contents("log.txt", "score.php 被呼叫了\\n", FILE_APPEND);
