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

$this->title = 'admin';
$this->params['breadcrumbs'][] = $this->title;
?>

<p>
    <?= Html::a('Create Layanan', ['create'], ['class' => 'btn btn-success']) ?>
</p>



<div class="Berita-admin">
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'judul',
            'konten:ntext',
            'penulis',
            'tanggal_terbit',
            //'foto',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Berita $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
</div>