<?php
declare(strict_types=1);

require __DIR__.'/header.php';
?>
<div class="row">
    <div class="col-2">
    </div>
    <div class="col-8 d-flex">
        <div class="row">
            <?php foreach ($authors as $author): ?>
                <div class="col-4">
                    <a href="authorArticle.php?author=<?php echo $author['name']; ?>">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top img-fluid" src="<?php echo $author['img']; ?>">
                            <div class="card-body">
                                <p class="card-text"><?php echo $author['name']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-2">
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
