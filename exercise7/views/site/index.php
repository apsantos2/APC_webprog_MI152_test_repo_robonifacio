<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Home Page';
?>
<script>
var divs = ["tabs","trivia","guest"];
var visibleDivId = null;

function toggleVisibility(divId) {
    if (visibleDivId === divId) {
        visibleDivId = null;
    } else {
        visibleDivId = divId;
    }
    hideNonVisibleDivs();
}

function hideNonVisibleDivs() {
    var i, divId, div;
    for (i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if (visibleDivId === divId) {
            div.style.display = "block";
        } else {
            div.style.display = "none";
        }
    }
}
</script>
<div class="site-index">
	<div id="large-header" class="large-header">
		<canvas id="demo1-canvas"></canvas>
			<div class="points">
				<canvas id="demo-canvas"></canvas>
			</div>
				<div class="main-title">
				<button class="btn btn-lg btn-success" onClick="toggleVisibility('tabs');return false;">TABLES</button>
				<button class="btn btn-lg btn-success" onClick="toggleVisibility('trivia');return false;">TRIVIA</button>
				<button class="btn btn-lg btn-success" onClick="toggleVisibility('guest');return false;">USERS</button>
					<div id="tabs">
						<div class="box">
<table style="width:100%; border: 1px solid black; border-collapse: collapse;">
  <tr style="border: 1px solid black; border-collapse: collapse;">
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Full Name</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Nick Name</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Interests</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Hobbies</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Favorite Websites</th>
  </tr>
  <tr>
      <td style="border: 1px solid white; text-align: center; border-collapse: collapse; height: 342px;"><img src="http://127.0.0.1/exercise7/web/img/itsme.jpg" class="img-circle" WIDTH="200" HEIGHT="200"></td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Par</td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img src="http://127.0.0.1/exercise7/web/img/bball.jpg" class="img-circle" WIDTH="190" HEIGHT="170"><br>
      <img src="http://127.0.0.1/exercise7/web/img/vball.jpg" class="img-circle" WIDTH="190" HEIGHT="170">
      </td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img src="http://127.0.0.1/exercise7/web/img/books.jpg" class="img-circle" WIDTH="190" HEIGHT="170"><br>
      <img src="http://127.0.0.1/exercise7/web/img/cooking.jpg" class="img-circle" WIDTH="190" HEIGHT="170">
      </td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <a href="http://www.w3schools.com/" style="color: white;">W3SCHOOLS</a><br>
      <a href="http://rathena.org/" style="color: white;">RATHENA</a><br>
      <a href="http://herc.ws/" style="color: white;">HERCULES</a>
          
      </td>
  </tr>
    
  <tr>
    <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Ralph Noel O. Bonifacio</td>
    <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;"></td>
    <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Basketball and Volleyball</td>
    <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Reading and Cooking</td>
    <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;"></td>
  </tr>

</table>
</div>
</div>
				<div id="trivia">
					<div class="box">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					<script>
						$(document).ready(function()
						{
							$("#show").click(function(){
							$("answers").toggle(500);
						});
						});
					</script>
<p>
        <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=trivia" class="btn btn-lg btn-success">ADD TRIVIA</a>';
			}
			?>
    </p>
					<h1>Trivias</h1>
					
					<?php foreach ($trivias as $trivia): ?>
								<strong><?= Html::encode("{$trivia->question}") ?>:</strong>
							<br></br>	
								<answers style=display:none><?= $trivia->answer ?></answers>
							<br></br>		
					<?php endforeach; ?>
					<p><a class="btn btn-lg btn-success" id="show">SHOW / HIDE</a></p>
					</div>
				</div>
				
				<div id="guest">
					<div class="box">
						<p>
        <?php
			if (Yii::$app->user->isGuest) {
				
			} elseif(Yii::$app->user->identity->username) {
				echo '<a href="http://127.0.0.1/exercise7/web/index.php?r=guest" class="btn btn-lg btn-success">ADD DATA</a>';
			}
			?>
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
        ],
    ]); ?>
</div>
					</div>
				</div>
				
				</div>
			</div>
</div>
</div>

