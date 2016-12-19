<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guestform */

$this->title = 'Update Guestform: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Guestforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guestform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
