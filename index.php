<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__.'/header.php';

?>

<div class="row"> <!-- Row1 -->
    <div class="col-2"> <!-- Div col-2 -->
    </div> <!-- /Div col-2 -->
    <div class="col-8"> <!-- Div col-8 -->
        <?php foreach ($articles as $article): ?>
            <div class="card"> <!-- Div Card -->
                <img class="img-fluid" src="<?php echo $article['img']; ?>">
                <h3 class="card-header bg-white"><?php echo $article['title']; ?></h3>
                <div class="card-body"> <!-- Div CardBody -->
                    <p class="card-text"><?php echo $article['content']; ?></p>
                    <div class="row"> <!-- Row2 -->
                        <div class="col-10"> <!-- Div col-10 -->
                            <p><?php echo 'Written by: ' . $article['author']; ?></p>
                        </div> <!-- /Div col-10 -->
                        <div class="col-2"> <!-- Div col-2 -->
                            <p><?php echo $article['publishedDate']; ?></p>
                            <p><?php echo $article['likeCounter'] . ' likes'; ?></p>
                        </div> <!-- /Div col-2 -->
                    </div> <!-- /Row2 -->
                </div> <!-- /Div CardBody -->
            </div> <!-- /Div Card -->
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
