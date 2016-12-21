<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guestform */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Guestforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
			<div class="view-title">
<h1><?= Html::encode($this->title) ?></h1>
<center><p><a href="http://127.0.0.1/exercise7/web/index.php?r=guest" class="btn btn-lg btn-success">GO BACK</a></p></center>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<div class="guestform-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'complete_name',
            'nickname',
            'Email_Address:email',
            'Home_Address',
            'gender',
            'cellphone',
            'comment',
        ],
    ]) ?>

		</div>
	</div>
</div>
