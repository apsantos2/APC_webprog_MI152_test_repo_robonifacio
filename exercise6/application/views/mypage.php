<html>
<head>
<title>My Home Page</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/mystyles.css">
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
<body>
<div class="lol" style="margin-top: 60px; margin-left: 580px;">
<a href="<?php echo base_url(); ?>index.php/users/trivia" style="color: white;">CLICK ME FOR TRIVIA</a><br>
<a href="<?php echo base_url(); ?>index.php/users/database_view" style="margin-left: -10px;color: white;">CLICK ME FOR DATABASE</a>
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
      <td style="border: 1px solid white; text-align: center; border-collapse: collapse; height: 342px;"><img class="par" /></td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">Par</td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img class="bball" /><br>
      <img class="vball" />
      </td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <img class="books" /><br>
      <img class="cooking" />
      </td>
      <td style="color : white; border: 1px solid white; text-align: center; border-collapse: collapse;">
      <a href="http://www.w3schools.com/" target="_blank" style="color: white;">W3SCHOOLS</a><br>
      <a href="http://rathena.org/" target="_blank" style="color: white;">RATHENA</a><br>
      <a href="http://herc.ws/" target="_blank" style="color: white;">HERCULES</a>
          
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
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $nickErr = "";
$name = $email = $gender = $comment = $nick = $home = $num = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["home"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home"]);
  }
  
  if (empty($_POST["num"])){
	  $num = "";
  } else {
	  $num = test_input($_POST["num"]);
  }
  
  if (empty($_POST["nick"])) {
	  $nickErr = "Nickname is required";
  } else {
	  $nick = test_input($_POST["nick"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nickErr = "Only letters and white space allowed"; 
    }
  }
  
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
<div class="result">
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $nick;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $gender;
echo "<br>";
echo $num;
echo "<br>";
echo $comment;
echo "<br>";

?>
</div>

</body>
</html>