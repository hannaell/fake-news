<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav"> <!-- Div Navbar -->
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Articels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Writers</a>
              </li>
            </ul>
          </div> <!-- /Div Navbar -->
        </nav> <!-- /Navbar -->
      </div> <!-- /Div col-8 -->
      <div class="col-2"> <!-- Div col-2 -->

      </div> <!-- /Div col-2 -->
    </div>
    <div class="row"> <!-- Row1 -->
      <div class="col-2"> <!-- Div col-2 -->

      </div> <!-- /Div col-2 -->
      <div class="col-8"> <!-- Div col-8 -->
        <?php foreach ($articles as $post): ?>
        <div class="card">
          <img src="<?php echo $post['img']; ?>" alt="">
          <h5 class="card-header bg-white"><?php echo $post['title']; ?></h5>
          <div class="row"> <!-- Row2 -->

            <div class="col-10"> <!-- Div col-10 -->
              <p><?php echo 'Written by: ' . $post['author']; ?></p>
            </div> <!-- /Div col-10 -->
            <div class="col-2"> <!-- Div col-2 -->
              <p><?php echo $post['publishedDate']; ?></p>
            </div> <!-- /Div col-2 -->
          </div> <!-- /Row2 -->

          <div class="card-body"> <!-- Div CardBody -->
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $post['content']; ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div> <!-- /Div CardBody -->
        </div>
      <?php endforeach; ?>
    </div> <!-- /Div col-8 -->
      <div class="col-2"> <!-- Div col-2 -->

      </div> <!-- /Div col-2 -->
    </div> <!-- /Row1 -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
