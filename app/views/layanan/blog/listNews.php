<?php

use yii\helpers\Url;

$photo = $model->photo;
if(empty($photo) || !is_file($_SERVER['DOCUMENT_ROOT'].$photo)){
    $photo = Url::to('@web/images/project-1.jpg');
}

?>
<div class="col-lg-4 col-md-4">
    <div class="berita-index animate-box fadeInUp animated-fast">
        <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" judul="<?= $model->judul ?>">
            <img class="img-responsive" src="<?= $photo ?>" alt="<?= $model->judul ?>" />
        </a>
        <div class="berita-text">
            <h3><a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" judul="<?= $model->judul ?>"><?= $model->judul ?></a></h3>
            <p class="summary"><?= $model->summary ?></p>
            <span class="posted_on"><?= $model->tanggal_terbit ?></span>
            <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" class="btn btn-primary" judul="<?= $model->judul ?>">Selengkapnya</a>
        </div>
    </div>
</div>