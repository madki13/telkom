<?php

use yii\helpers\Html;
use yii\web\View;
use yii\web\YiiAsset;
use yii\data\ActiveDataProvider;

/** @var View $this */
/** @var app\models\Berita $model */

$photo = $model->photo;

$this->title = $model->judul;
YiiAsset::register($this);
?>

<style>
    .card-img-container {
        width: 100%;
        height: 100%;
        object-fit: fill;
        /* Sesuaikan object-fit sesuai kebutuhan (cover/contain/fill) */


    }

    @media (max-width: 768px) {
        .card-img-container {
            width: 119px;
            height: 100px;
            object-fit: cover;
            margin: 0;
        }
    }

    .card-img-container {
        width: 100%;
        /* Sesuaikan lebar container gambar */
        height: 300px;
        /* Sesuaikan tinggi container gambar */
        overflow: hidden;
        margin-bottom: 10px;
        /* Sesuaikan margin bawah */
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* Sesuaikan object-fit sesuai kebutuhan (cover/contain/fill) */
    }
</style>

<div id="berita-view">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-img-container">
                        <img src="<?= Yii::getAlias('@web') . '/' . $model->photo ?>" style="" class="card-img" alt="<?= Html::encode($model->judul) ?>">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title display-4"><?= Html::encode($model->judul) ?></h1>
                        <p class="card-text text-muted"><?= $model->tanggal_terbit ?></p>
                        <!-- Tambahkan Penulis di bawah ini -->
                        <p class="card-text"><strong>Penulis:</strong> <?= Html::encode($model->penulis) ?></p>
                        <!-- Akhir Penambahan Penulis -->
                        <div class="card-text lead">
                            <?php
                            $paragraphs = explode("\n", $model->konten);
                            foreach ($paragraphs as $paragraph) {
                                echo "<p>" . Html::encode($paragraph) . "</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>