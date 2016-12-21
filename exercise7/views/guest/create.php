<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Guestform */

$this->title = 'Create Guestform';
$this->params['breadcrumbs'][] = ['label' => 'Guestforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guestform-create">
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
			
			<div class="create-title">
			<center><p><a href="http://127.0.0.1/exercise7/web/index.php?r=guest" class="btn btn-lg btn-success">GO BACK</a></p></center>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
		</div>
			</div>
	</div>
</div>