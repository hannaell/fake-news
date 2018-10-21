<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

//$titles = getTitle($articles);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fake News</title>
    </head>
    <body>
      <?php foreach ($articles as $post): ?>
        <p><?php echo $post['title']; ?></p>
        <p><?php echo $post['content']; ?></p>
        <p><?php echo $post['author']; ?></p>
        <p><?php echo $post['publishedDate']; ?></p>
        <p><?php echo $post['likeCounter']; ?></p>
      <?php endforeach; ?>


    </body>
</html>
