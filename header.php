<?php
declare(strict_types=1);
require __DIR__.'/data.php';
require __DIR__.'/functions.php';

usort($articles, "sortByDate");
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>FakeNews</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid"> <!-- Div Jumbotron -->
        <div class="container"> <!-- Div Container -->
            <h1 class="display-4">The Most Fake News Ever</h1>
            <p class="lead">This is a page with the most fake news ever written.</p>
        </div> <!-- /Div Container -->
    </div> <!-- /Div Jumbotron -->
    <div class="row">
        <div class="col-2"> <!-- Div col-2 -->

        </div> <!-- /Div col-2 -->
        <div class="col-8"> <!-- Div col-8 -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Navbar -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> <!-- Div Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="authors.php">Writers</a>
                        </li>
                    </ul>
                </div> <!-- /Div Navbar -->
            </nav> <!-- /Navbar -->
        </div> <!-- /Div col-8 -->
        <div class="col-2"> <!-- Div col-2 -->

        </div> <!-- /Div col-2 -->
    </div>
