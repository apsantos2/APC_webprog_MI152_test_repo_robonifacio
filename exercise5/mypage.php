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
<?php
$servername = "localhost";
$username = "root";
$password = "parpar21";
$dbname = "guestform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO guestform VALUES ('$name', '$nick', '$email', '$home', '$gender', $num, '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo "You will be redirected to main page in few seconds";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<h2>Fill Up the form</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Nickname: <input type="text" name="nick" value="<?php echo $nick;?>">
  <span class="error">* <?php echo $nickErr;?></span>
  <br><br>
  Email Address: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"><?php echo $emailErr;?></span>
  <br><br>
  Home Address: <input type="text" name="home" value="<?php echo $home;?>">
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Cellphone Number: <input type="number" name="num" value="<?php echo $num;?>">
  <div class="comment">Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  </div>
</form>
</body>
</html>