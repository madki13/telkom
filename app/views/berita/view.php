<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;



/** @var yii\web\View $this */
/** @var app\models\Berita $model */

$this->title = $model->judul;


\yii\web\YiiAsset::register($this);
?>
<div id="berita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="berita-view">
                    <div class="berita-text">
                        <h3><?= $model->judul ?></h3>
                        <span class="posted_on"><?= $model->tanggal_terbit ?></span>
                        <div class="content">
                            <?= $model->konten ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>