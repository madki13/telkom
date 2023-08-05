<?php

use app\models\Testimoni;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;


/** @var yii\web\View $this */
/** @var app\models\TestimoniSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimonis';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="testimoni-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="container">
        <div class="row">
            <div class="row">
                <?php
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'pager' => ['options' => ['class' => 'pagination col-md-12', 'maxButtonCount' => 4]],
                    'itemView' => 'blog/listNews',
                    'summary' => '',
                ]); ?>

            </div>

        </div>

    </div>

</div>

<doiv class="col-md-4">
    <div class="card mb-4 box-shadow">
        <img class="card-img-top" data-src="/site/css/template alt="Card image cap">
        <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
            </div>
        </div>
    </div>
</div>

<?php /*<div class="testimoni-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Testimoni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama:ntext',
            'testimoni',
            'photo',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Testimoni $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div> */
