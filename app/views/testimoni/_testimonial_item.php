<?php
use yii\helpers\Html;
?>

<div class="item <?= $index === 0 ? 'active' : '' ?>">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <?= Html::img($model->photo, ['class' => 'rounded-circle img-fluid', 'alt' => 'Profile Photo']) ?>
                </div>
                <div class="col-md-9">
                    <h3><?= Html::encode($model->nama) ?></h3>
                    <p><?= Html::encode($model->testimoni) ?></p>
                    <p class="small text-muted"><?= Html::encode($model->tanggal_terbit) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
