<?php

use app\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\bootstrap4\LinkPager;

/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>

<div id="testimoni-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="row">
                <?php


                $dataProvider->pagination->pageSize = 9; // Batasi jumlah testimoni per halaman
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
                    'summary' => '',
                ]); ?>
            </div>
        </div>
    </div>
</div>

<?php /* <div class="Berita-index">
    <?= GridView::widget($dataProvider, $searchModel, $this->title,
    [
        ['class' => 'kartik\grid\SerialColumn'],
            'id',
            'judul',
            'konten:ntext',
            'penulis',
            'tanggal_terbit',
            //  'photo',
        [
            'class' => ActionColumn::className(),
            'width' => '150px',
            'urlCreator' => function ($action, $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ]) ?>
</div> */