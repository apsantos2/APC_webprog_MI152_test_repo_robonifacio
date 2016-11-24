<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guestform */

$this->title = 'Create Guestform';
$this->params['breadcrumbs'][] = ['label' => 'Guestforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guestform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
