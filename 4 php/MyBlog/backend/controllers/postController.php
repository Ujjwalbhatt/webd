<?php
include_once __DIR__ . '/../config/db.php';
include_once __DIR__ . '/../models/Post.php';

function addPost($title, $content) {
    $db = Database::connect();
    if ($db === null) {
        die('Database connection failed');
    }
    $sql = 'INSERT INTO posts (title, content) VALUES (:title, :content)';
    $stmt = $db->prepare($sql);
    $stmt->execute(['title' => $title, 'content' => $content]);
}

function getAllPosts() {
    $db = Database::connect();
    if ($db === null) {
        die('Database connection failed');
    }
    $sql = 'SELECT * FROM posts';
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
