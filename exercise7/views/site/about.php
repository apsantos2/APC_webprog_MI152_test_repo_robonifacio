<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
<div id="large-header" class="large-header">
    <canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
				<div class="about-title">
				<div class="box">
					<h1><?= Html::encode($this->title) ?></h1>

						<p>
					This is the About page. You may modify the following file to customize its content:
						</p>

					<code><?= __FILE__ ?></code>
				</div>
				</div>
</div>

</div>
