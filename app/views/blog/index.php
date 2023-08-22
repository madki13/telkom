<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;
$this->title = 'Website Resmi SMK Negeri 2 Jakarta';
?>
<div id="fh5co-project">
    <div class="container">
        <div class="row">
        <?php
            echo ListView::widget( [
                'dataProvider' => $dataProvider,
                'pager' => ['options' => ['class' => 'pagination col-md-12', 'maxButtonCount'=>4]],
                'itemView' => '/testimoni/blog/listNews',
                'summary'=>'',
            ]); ?>
        </div>
    </div>
</div>