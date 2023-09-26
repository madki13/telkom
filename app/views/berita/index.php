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


<?php if (!Yii::$app->user->isGuest) : ?>
    <div class="navbar-right">
        <?= Html::a('Admin Berita', ['berita/admin'], ['class' => 'btn', 'style' => 'background-color: #B9272B; color: #fff;']) ?>
    </div>
<?php endif; ?>


<div id="testimoni-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="row">
                <?php
                $dataProvider->pagination->pageSize = 3     ; // Batasi jumlah testimoni per halaman
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
                        'class' => 'row',
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>

