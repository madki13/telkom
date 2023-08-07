<?php

use yii\helpers\Url;

$photo = $model->photo;
if(empty($photo) || !is_file($_SERVER['DOCUMENT_ROOT'].$photo)){
    $photo = Url::to('@web/images/project-1.jpg');
}

?>


<div class="card" style="width: 18rem;">
    <div class="berita-index animate-box fadeInUp animated-fast">
        <a href="<?= Url::to(['berita/view', 'id' => $model->id]) ?>" nama="<?= $model->nama ?>">
            <img class="img-responsive" src="<?= $photo ?>" />
        </a>
        <img class="card-img-top" src="<?= $photo ?>" alt="" <?= $model->nama ?>">

    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $model->nama ?></h5>
        <p class="card-text"><?= $model->testimoni ?></p>
        <small class="text-muted"><?= $model->tanggal_terbit ?></small>
    </div>
</div>