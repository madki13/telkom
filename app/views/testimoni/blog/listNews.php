<?php

use yii\helpers\Url;

$photo = $model->photo;

?>

<style>
  @media (max-width:991.98px) {
    .padding {
      padding: 1.5rem
    }
  }

  @media (max-width:767.98px) {
    .padding {
      padding: 1rem
    }
  }

  .padding {
    padding: 5rem
  }

  .card {
    position: relative;
    display: flex;
    width: 350px;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #d2d2dc;
    border-radius: 11px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164);
    height: 240px;
    /* Sesuaikan tinggi sesuai preferensi Anda */
    overflow: hidden;
    /* Atur overflow agar isi yang panjang tidak terlihat di luar card */

  }

  .template-demo p {
    margin: 0;
    /* Hapus margin default untuk menghindari jarak ekstra */
    overflow: hidden;
    /* Atur overflow untuk memotong teks yang terlalu panjang */
    text-overflow: ellipsis;
    /* Tampilkan elipsis (...) untuk teks yang terpotong */
    display: -webkit-box;
    -webkit-line-clamp: 3;
    /* Batasi jumlah baris yang ditampilkan */
    -webkit-box-orient: vertical;
  }


  .card .card-body {
    padding: 1rem 1rem;
  }

  .card-body {
    flex: 1 1 auto;
    padding: 1.25rem
  }

  p {
    font-size: 0.875rem;
    margin-bottom: .5rem;
    line-height: 1.5rem
  }

  h4 {
    line-height: .2 !important;
  }

  .profile {
    margin-top: 16px;
    margin-left: 11px;
  }

  .profile-pic {
    width: 40px;
  }

  .cust-name {
    font-size: 18px;
  }

  .cust-profession {
    font-size: 10px;
  }



  .items {
    width: 90%;
    margin: 0px auto;
    margin-top: 100px
  }

  .slick-slide {
    margin: 10px
  }

  .testimoni-carousel {
    display: flex;
    overflow: hidden;
    max-width: 100%;
    position: relative;
  }

  .testimoni-slide {
    flex: 0 0 100%;
    transition: transform 0.5s ease-in-out;
  }

  .testimoni-carousel.active .testimoni-slide {
    animation: slideshow 10s infinite;
  }

  @keyframes slideshow {

    0%,
    100% {
      transform: translateX(0%);
    }

    25% {
      transform: translateX(-100%);
    }

    50% {
      transform: translateX(-200%);
    }

    75% {
      transform: translateX(-300%);
    }
  }
</style>

<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>


<div class="items">

  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>

      <div class="template-demo">
        <p><?= $model->testimoni ?></p>
      </div>

      <hr>

      <div class="row">

        <div class="col-sm-2">

          <img class="profile-pic" src="<?= $photo ?>">

        </div>

        <div class="col-sm-10">
          <div class="profile">
            <h4 class="cust-name"><?= $model->nama ?></h4>
            <p class="cust-profession"><?= $model->tanggal_terbit ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= Yii::getAlias('@web/js/script.js') ?>"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</div>

<!-- <body>
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>  -->



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

</html>