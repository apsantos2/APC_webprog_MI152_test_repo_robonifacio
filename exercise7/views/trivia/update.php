<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Trivia */

$this->title = 'Update Trivia: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Trivias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
			<div class="triviau-title">	
<div class="trivia-update">

    <h1><?= Html::encode($this->title) ?></h1>
	<center><p><a href="http://127.0.0.1/exercise7/web/index.php?r=trivia" class="btn btn-lg btn-success">GO BACK</a></p></center>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
</div>

