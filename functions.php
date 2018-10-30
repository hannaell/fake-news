<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

/**
 * [getTitle description]
 * @param  array $articles [description]
 * @return array           [description]
 */
function getTitle(array $articles): array {
  $title = [];
  foreach ($articles as $article) {
    $title[] = $article['title'];

  }
  return $title;
}

/**
 * [getAuthor description]
 * @param  array $articles [description]
 * @return array           [description]
 */
function getAuthor(array $articles): array {
  $author = [];
  foreach ($articles as $article) {
    $author[] = $article['author'];

  }
  return $author;
}

/**
 * [sortByDate description]
 * @param  array $dateOne [description]
 * @param  array $dateTwo [description]
 * @return bool           [description]
 */
function sortByDate(array $dateOne, array $dateTwo) : bool {
  return strtotime($dateOne['publishedDate']) < strtotime($dateTwo['publishedDate']);
}
