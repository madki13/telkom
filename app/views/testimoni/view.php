<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Testimoni $model */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Testimonis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div id="testimoni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="testimoni-view">
                    <div class="testimoni-text">
                        <h3><?= $model->nama ?></h3>
                        <span class="posted_on"><?= $model->tanggal_terbit ?></span>
                        <div class="content">
                            <?= $model->testimoni ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php /*<div class="testimoni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama:ntext',
            'testimoni',
            'photo',
        ],
    ]) ?>

</div> */
