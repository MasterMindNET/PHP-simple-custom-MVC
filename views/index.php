<?php
/**
 * Created by PhpStorm.
 * User: Skylark
 * Date: 2/5/2019
 * Time: 3:26 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1><?php $pageTitle ?></h1>

<?php foreach($posts as $post):?>
<div>
    <h2><a href="index.php?option=view&id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
    <p><?= $post['description'] ?></p>
</div>
<?php endforeach; ?>

<footer>footer</footer>
</body>
</html>
