<?= $this->include('layout/header') ?>

   <h1>Your Results: </h1>

    <?php if($movies == []){
        echo "Sorry! No Results";
    }?>
    <div class="row">
        <?php foreach ($movies as $movie): ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= 'https://image.tmdb.org/t/p/w200/' . $movie['poster_path'] ?>" alt="<?= $movie['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie['title'] ?></h5>
                    <p class="card-text"><?php echo word_limiter($movie['overview'], 12) ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>

<?= $this->include('layout/footer') ?>
