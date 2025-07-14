<?php
$db = new PDO('sqlite:chessScore.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 清空 scores 表
$db->exec("DELETE FROM scores");

echo "資料已清除";
