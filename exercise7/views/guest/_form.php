<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guestform */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guestform-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'complete_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email_Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Home_Address')->textInput(['maxlength' => true]) ?>

     <?=$form->field($model, 'gender')->radioList(array('Male' => 'Male', 'Female' =>'Female'), array('class' => 'i-checks'));?>

    <?= $form->field($model, 'cellphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
