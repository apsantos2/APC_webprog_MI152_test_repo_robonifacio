<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guestforms';
$this->params['breadcrumbs'][] = $this->title;
?>
	<h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Guestform', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="guestform-index">

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
