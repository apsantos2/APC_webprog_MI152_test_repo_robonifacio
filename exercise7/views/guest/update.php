<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Guestform */

$this->title = 'Update Guestform: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Guestforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
			<div class="update-title">
<div class="guestform-update">

    <h1><?= Html::encode($this->title) ?></h1>
	<center><p><a href="http://127.0.0.1/exercise7/web/index.php?r=guest" class="btn btn-lg btn-success">GO BACK</a></p></center>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
			</div>
		</div>
	</div>
</div>
