<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
			<div class="trivia-title" style="margin-top: 30px;">
<div class="trivia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Trivia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'QUESTION',
            'ANSWER',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
