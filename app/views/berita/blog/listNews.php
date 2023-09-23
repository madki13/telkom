<?php

use yii\helpers\Url;
use yii\helpers\Html;
use Yii;


$photo = $model->photo;


?>

<head>
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
            font-size: px;
            /* Atur ukuran font sesuai kebutuhan Anda */
            padding: 9px 20px 8px;
            /* Atur padding tombol sesuai kebutuhan Anda */
        }

        @media (max-width: 768px) {
            .card {
                max-width: 120px;
                /* Mengisi lebar layar */
                max-height: 420px;
                margin: 0;
                /* Menghapus margin di perangkat seluler */
            }

            .small-btn {
                font-size: 10px;
                /* Mengurangi ukuran font di perangkat seluler */
                padding: 6px 12px;
                /* Mengurangi padding di perangkat seluler */
                line-height: 1.5;

            }

            .card-img-top {
                width: 119px;
                height: 100px;
                object-fit: cover;
                margin: 0;
            }

            .card-title {
                max-height: 80px;
                /* Atur tinggi maksimum judul sesuai preferensi Anda */
                overflow: hidden;
                text-overflow: ellipsis;
                font-size: small;
                line-height: 1.5;
            }

            .card-text {
                font-size: small;
                text-overflow: ellipsis;
                overflow: hidden;
                max-height: fit-content;
            }
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>


<div class="card">
    <div class="card-img-top">
        <img class="card-img-top" src="<?= Url::to('@web/' . $photo) ?>" alt="" <?= $model->judul ?>>

    </div>

    <div class="card-body">
        <h5 class="card-title"><?= $model->judul ?></h5>
        <p class="card-text"><?= $model->summary ?></p>
        <a class="tombol-selengkapnya small-btn" href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>">Selengkapnya</a>
    </div>
</div>