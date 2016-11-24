<?php

/* @var $this yii\web\View */

$this->title = 'My Home Page';
?>
<head>
<style>
a {
 text-decoration: none;
}

a:hover {
 opacity: 0.7;	
}

.comment {
	margin-left: 700px;
	margin-top: -300px;
}

.result {
	margin-left: 700px;
}

.error {
	color : red;
}

.par {
	content: url(http://127.0.0.1/basic/css/images/itsme.jpg);
	width: 200px;
	height: 200px;
}

.bball {
	content: url(http://127.0.0.1/basic/css/images/bball.jpg);
	width: 190px;
	height: 170px;
}

.vball {
	content: url(http://127.0.0.1/basic/css/images/vball.jpg);
	width: 190px;
	height: 170px;
}

.books {
	content: url(http://127.0.0.1/basic/css/images/books.jpg);
	width: 190px;
	height: 170px;
}

.cooking {
	content: url(http://127.0.0.1/basic/css/images/cooking.jpg);
	width: 190px;
	height: 170px;
}

</style>
</head>
<div class="site-index">
<center>  
  <div id="tabs">
<table style="width:94.5%; border: 1px solid black; border-collapse: collapse;">
  <tr style="border: 1px solid black; border-collapse: collapse;">
    <th style="background-color: grey; color : white; border: 1px solid black; border-collapse: collapse;">Full Name</th>
    <th style="background-color: grey; color : white; border: 1px solid black; border-collapse: collapse;">Nick Name</th>
    <th style="background-color: grey; color : white; border: 1px solid black; border-collapse: collapse;">Interests</th>
    <th style="background-color: grey; color : white; border: 1px solid black; border-collapse: collapse;">Hobbies</th>
    <th style="background-color: grey; color : white; border: 1px solid black; border-collapse: collapse;">Favorite Websites</th>
  </tr>
  <tr>
      <td style="border: 1px solid black; text-align: center; border-collapse: collapse; height: 342px;"><img class="par" /></td>
      <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">Par</td>
      <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">
      <img class="bball" /><br>
      <img class="vball" />
      </td>
      <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">
      <img class="books" /><br>
      <img class="cooking" />
      </td>
      <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">
      <a href="http://www.w3schools.com/" target="_blank" style="color: black;">W3SCHOOLS</a><br>
      <a href="http://rathena.org/" target="_blank" style="color: black;">RATHENA</a><br>
      <a href="http://herc.ws/" target="_blank" style="color: black;">HERCULES</a>
          
      </td>
  </tr>
    
  <tr>
    <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">Ralph Noel O. Bonifacio</td>
    <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;"></td>
    <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">Basketball and Volleyball</td>
    <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;">Reading and Cooking</td>
    <td style="color : black; border: 1px solid black; text-align: center; border-collapse: collapse;"></td>
  </tr>

</table>
</div>
</center>
</div>
