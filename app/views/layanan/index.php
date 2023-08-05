<?php

use app\models\Layanan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LayananSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Layanan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="layanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
        <div class="row">
            <div class="row">
            <?php
                echo ListView::widget( [
                    'dataProvider' => $dataProvider,
                    'pager' => ['options' => ['class' => 'pagination col-md-12', 'maxButtonCount'=>4]],
                    'itemView' => 'blog/listNews',
                    'summary'=>'',
                ]); ?>

            </div>

        </div>

    </div>

</div> 


<?php /* <div class="layanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Layanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama:ntext',
            'harga',
            'kecepatan',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Layanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div> */
