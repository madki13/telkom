<?php

use app\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;


/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="Berita-admin">
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
</div>