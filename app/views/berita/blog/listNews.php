<?php

use yii\helpers\Url;

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


<div class="card" style="width: 18rem;">
    <div class="berita-index animate-box fadeInUp animated-fast">
        <img class="card-img-top" src="<?= $photo ?>" alt="" <?= $model->judul ?>">

    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $model->judul ?></h5>
        <p class="card-text"><?= $model->summary ?></p>
        <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" class="btn btn-primary" judul="<?= $model->judul ?>">Selengkapnya</a>
    </div>
</div>