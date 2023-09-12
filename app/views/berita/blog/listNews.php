<?php

use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


$photo = $model->photo;


?>

<!-- <div class="col-4" data-key="<?= $key; ?>">
    <div class="berita-index animate-box fadeInUp animated-fast">
        <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" judul="<?= $model->judul ?>">
            <img class="img-responsive" src="<?= $photo ?>" />
        </a>
        <div class="berita-text">
            <h3><a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" judul="<?= $model->judul ?>"><?= $model->judul ?></a></h3>
            <p class="summary"><?= $model->summary ?></p>
            <span class="posted_on"><?= $model->tanggal_terbit ?></span>
            <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" class="btn btn-primary" judul="<?= $model->judul ?>">Selengkapnya</a>
        </div>
    </div>
</div> -->

<head>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet"> -->
    <style>
        .card {
            margin-top: 20px;
            margin-bottom: 20px;
            width: 350px;
        }

        .tombol-selengkapnya {
            text-decoration: none;
            background-color: #222;
            border-radius: 4px;
            border-style: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            max-width: none;
            min-height: 44px;
            min-width: 10px;
            outline: none;
            overflow: hidden;
            padding: 9px 20px 8px;
            position: relative;
            text-align: center;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 100%;
        }

        .tombol-selengkapnya:hover,
        .tombol-selengkapnya:focus {
            opacity: .75;
            text-decoration: none;
            color: white;
        }

        .card-img-top {
            width: 348px;
            height: 233px;
            object-fit: cover;
            margin: 0;
        }

        .small-btn {
            font-size: 14px;
            /* Atur ukuran font sesuai kebutuhan Anda */
            padding: 6px 12px;
            /* Atur padding tombol sesuai kebutuhan Anda */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>


<div class="card">
    <div class="img-top berita-index animate-box fadeInUp animated-fast">
        <img class="card-img-top" src="<?= Url::to('@web/' . $photo) ?>" alt="" <?= $model->judul ?>>

    </div>

    <div class="card-body">
        <h5 class="card-title"><?= $model->judul ?></h5>
        <p class="card-text"><?= $model->summary ?></p>
        <a class="tombol-selengkapnya small-btn" href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>">Selengkapnya</a>
    </div>
</div>