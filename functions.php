<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function getTitle(array $articles): array {
  $title = [];
  foreach ($articles as $article) {
    $title[] = $article['title'] . '<br>' . $article['content'] . '<br>' . $article['author'] . '<br>' . $article['publishedDate'] . '<br>' . $article['likeCounter'];

  }
  return $title;
}

function getAuthor(array $articles): array {
  $author = [];
  foreach ($articles as $article) {
    $author[] = $article['author'];

  }
  return $author;
}
