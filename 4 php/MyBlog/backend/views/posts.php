<?php
include_once __DIR__ . '/../controllers/postController.php';
$posts = getAllPosts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="../../frontend/styles.css">
</head>
<body>
    <div class="container">

        <h1>All Todo List</h1>
        
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
            </div>
            <?php endforeach; ?>
            
            <a href="../../frontend/addPost.html">Add New List</a>
        </div>

</body>
</html>
