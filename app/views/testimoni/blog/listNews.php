<?php

use yii\helpers\Url;

$photo = $model->photo;

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css.css" type="text/css">

</head>

<body>
    <section class="testi py-5" id="page4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-4"><?= $model->nama ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr>
                </div>
            </div>
            <div class="container1">
                <div class="row">
                    <div class="col ">
                        <div class="card" style="width: 20rem; text-align: center;">
                            <div class="profile-image" style="width: 90px; height: 90px; border-radius: 50%; margin: 0 auto;">
                                <img src="<?= $photo ?>" alt="Profile Photo" style="width: 90%; height: 90%; object-fit: cover; border-radius: 50%;">
                            </div>

                            <div class="card-body text-justify">
                                <p class="namecoment"><?= $model->tanggal_terbit ?></p>
                                <p class="coment"><sup><i class="fa fa-quote-left"></i></sup><?= $model->testimoni ?></sup></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->

</body>

<!-- <div class="card" style="width: 18rem;">
    <div class="testimoni-index animate-box fadeInUp animated-fast">

        <img class="img-responsive" src="<?= $photo ?>" />
        <img class="card-img-top" src="<?= $photo ?>" alt="" <?= $model->nama ?>">

    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $model->nama ?></h5>
        <p class="card-text"><?= $model->testimoni ?></p>
        <small class="text-muted"><?= $model->tanggal_terbit ?></small>
    </div>
</div> -->