<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;


/** @var yii\web\View $this */
/** @var app\models\Testimoni $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="testimoni-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="column">
                    <div class="col-6">
                        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-6">
                        <?= $form->field($model, 'testimoni')->textarea(['rows' => 6, 'maxlength' => 70])->label('testimoni')->hint('maksimal 70 karakter') ?>
                    </div>

                    <div class="col-6">
                        <?= $form->field($model, 'photo')->fileInput(["multiple" => true, "accept" => "image/*"]) ?>
                    </div>


                </div>
            </div>
        </div>

        <div class="card-footer">

            <div class="capctha">
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                &nbsp;
                <?= Html::resetButton('Reset', ['class' => 'btn btn-danger']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>