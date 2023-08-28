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

<div id="berita-view">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-img-container">
                        <img src="<?= Yii::getAlias('@web') . '/' . $model->photo ?>" class="card-img" alt="<?= Html::encode($model->judul) ?>">
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"><?= Html::encode($model->judul) ?></h1>
                        <p class="card-text posted_on"><?= $model->tanggal_terbit ?></p>
                        <div class="card-text content">
                            <?= $model->konten ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-img-container {
        width: 100%; /* Sesuaikan lebar container gambar */
        height: 250px; /* Sesuaikan tinggi container gambar */
        overflow: hidden;
        margin-bottom: 10px; /* Sesuaikan margin bawah */
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Sesuaikan object-fit sesuai kebutuhan (cover/contain/fill) */
    }
</style>