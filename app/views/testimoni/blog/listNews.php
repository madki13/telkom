<?php

use yii\helpers\Url;

$photo = $model->photo;
if(empty($photo) || !is_file($_SERVER['DOCUMENT_ROOT'].$photo)){
    $photo = Url::to('@web/images/project-1.jpg');
}

?>
<div class="col-lg-4 col-md-4">
    <div class="testimoni-index animate-box fadeInUp animated-fast">
            <img class="img-responsive" src="<?= $photo ?>" />
        </a>
        <div class="testimoni-text">
            <span class="posted_on"><?= $model->nama ?></span>

            <span class="posted_on"><?= $model->testimoni ?></span>
            <span class="posted_on"><?= $model->tanggal_terbit ?></span>

        </div>
    </div>
</div>