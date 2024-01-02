<?= $this->include('layout/header') ?>

<h1>Search Movies</h1>
<small>from themoviedb.org by Lakmin</small>
    <?php 
        echo form_open('movies/search');
        echo form_label('Search Your Favorite movies...:', 'keywords');
        echo form_input(['name' => 'keywords', 'id'=> 'keywords', 'class' => 'form-control',  'required' => 'required']);
        echo form_submit('submit', 'Search', "class='btn btn-primary'");
        echo form_close();
    ?>
<?= $this->include('layout/footer') ?>
