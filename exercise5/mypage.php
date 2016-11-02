<html>
<head>
<title>My Home Page</title>
<style>
a {
 text-decoration: none;
}

a:hover {
 opacity: 0.7;	
}

#tabs {
	margin-top: -50px;
	display: none;
}

#phpform {
	margin-left: 50px;
	margin-top: 90px;
	color: white;
	display: none;
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

button {
color: white;
background-color: grey;
border-color: white;
}

button:hover {
 color: grey;
 background-color: white;
 border-color: grey;
}

</style>
<script>
var divs = ["tabs","phpform"];
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
</head>
<body style="background: url(bg.png); background-repeat:no-repeat; background-position:top center; background-size:100%; margin:0; padding:0;">
<div class="lol" style="margin-top: 60px; margin-left: 580px;">
<a href="trivia.php" style="color: white;">CLICK ME FOR TRIVIA</a>
</div>

<button type="button" onClick="toggleVisibility('tabs');return false;" style="margin-top: 40px;margin-left: 565px;">Tables</button>
<button type="button" onClick="toggleVisibility('phpform');return false;" style="margin-left: 100px;">Form</button>

<div id="tabs">
<table style="width:94.5%; margin-left: 38px; margin-top: 140px; border: 1px solid black; border-collapse: collapse;">
  <tr style="border: 1px solid black; border-collapse: collapse;">
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Full Name</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Nick Name</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Interests</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Hobbies</th>
    <th style="background-color: grey; color : white; border: 1px solid white; border-collapse: collapse;">Favorite Websites</th>
  </tr>
  <tr>
      <td style="border: 1px solid white; text-align: center; border-collapse: collapse; height: 342px;"><img src="itsme.jpg" WIDTH="200" HEIGHT="200"></td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Par</td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img src="bball.jpg" WIDTH="190" HEIGHT="170"><br>
      <img src="vball.jpg" WIDTH="190" HEIGHT="170">
      </td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img src="books.jpg" WIDTH="190" HEIGHT="170"><br>
      <img src="cooking.jpg" WIDTH="190" HEIGHT="170">
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

<div id="phpform">
<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for="FullName">Complete Name:</label>
	<input type="text" name="name" id="FullName">
	<br><br>
	
	<label for="NickName">Nickname:</label>
	<input type="text" name="nick" id="NickName">
	<br><br>
	
	<label for="Email">Email Address:</label>
	<input type="text" name="email" id="Email">
	<br><br>
	
	<label for="HomeAddress">Home Address:</label>
	<input type="text" name="home" id="HomeAddress">
	<br><br>
	
	<label for="gender">Gender :</label>
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<br><br>
	
	<label for="cellphone">Cellphone Number:</label>
	<input type="number" name="num" id="cellphone">
	<br><br>
	
	<div class="comment">
	<label for="Comment">Comment:</label>
	<br><br>
	<textarea name="comment" rows="5" cols="40"></textarea>
	<br><br>
	<input type="submit" name="submit" value="Submit">  
	</div>
</form>
</body>
</html>