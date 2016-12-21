<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guestforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guestform-index">
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
				<div class="guest-title">
				<h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Guestform', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'complete_name',
            'nickname',
            'Email_Address:email',
            'Home_Address',
            'gender',
            'cellphone',
            'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
