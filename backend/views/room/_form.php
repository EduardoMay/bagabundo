<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_number')->textInput() ?>

    <?= $form->field($model, 'floor_number')->textInput() ?>

    <?= $form->field($model, 'type_room')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amenities')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_people')->textInput() ?>

    <?= $form->field($model, 'state')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
