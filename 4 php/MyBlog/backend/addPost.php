<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once __DIR__ . '/controllers/postController.php';
    $title = $_POST['title'];
    $content = $_POST['content'];

    addPost($title, $content);
    header('Location: ../frontend/addPost.html');
    exit();
}
?>
