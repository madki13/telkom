<?php

use app\models\Testimoni;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\bootstrap4\Carousel;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\LinkPager;




/** @var yii\web\View $this */
/** @var app\models\TestimoniSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimoni';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if (Yii::$app->user->isGuest) : ?>
    <p>
        <?= Html::a('Buat testimoni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php endif; ?>

<!-- <p>
    <?= Html::a('edit testimoni', ['admin'], ['class' => 'btn btn-success']) ?>
</p> -->

<?php if (!Yii::$app->user->isGuest) : ?>
    <div class="navbar-right">
        <?= Html::a('Admin', ['testimoni/admin'], ['class' => 'btn', 'style' => 'background-color: #B9272B; color: #fff;']) ?>
    </div>
<?php endif; ?>

<div id="testimoni-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="row">
                <?php
                $dataProvider->pagination->pageSize = 3; // Batasi jumlah testimoni per halaman
                $totalCount = $dataProvider->getTotalCount();
                $maxButtonCount = min($totalCount, 100); // Batasi jumlah tombol pagination

                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'pager' => [
                        'class' => LinkPager::class,
                        'options' => ['class' => 'pagination col-md-12', 'maxButtonCount' => $maxButtonCount],
                        'prevPageLabel' => '<i class="fas fa-angle-left"></i>',
                        'nextPageLabel' => '<i class="fas fa-angle-right"></i>',
                    ],
                    'itemView' => 'blog/listNews',
                    'summary' => '',
                    'itemOptions' => [
                        'class' => 'col-md-4 col-sm-6 col-12', // Sesuaikan dengan preferensi Anda
                    ],
                    'options' => [
                        'class' => 'card-title',
                    ],
                    'options' => [
                        'class' => 'row',
                    ],
                    'summary' => '',
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
