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

$this->title = 'Testimoni';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Buat testimoni', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<p>
    <?= Html::a('edit testimoni', ['admin'], ['class' => 'btn btn-success']) ?>
</p>

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
                    'itemOptions' => [
                        'class' => 'col-4',
                    ],
                    'options' => [
                        'class' => 'card-body',
                    ],
                    'options' => [
                        'class' => 'card-title',
                    ],
                    'options' => [
                        'class' => 'row',
                    ],

                    
                    'summary'=>'',
                ]); ?>

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
