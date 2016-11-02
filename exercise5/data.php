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
</style>
</head>
<body style="background: url(bg.png); background-repeat:no-repeat; background-position:top center; background-size:100%; margin:0; padding:0;">

<div id="succesfully" style="margin-left: 50px; margin-top: 140px; color: white;">
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
  
  $name = $_POST['name'];
  $nick = $_POST['nick'];
  $email = $_POST['email'];
  $home = $_POST['home'];
  $gender = $_POST["gender"];
  $num = $_POST['num'];
  $comment = $_POST['comment'];

$sql = "INSERT INTO guestform VALUES ('$name', '$nick', '$email', '$home', '$gender', $num, '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	echo " ";
	echo "You will be redirected to main page in few seconds";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("refresh:2; url=mypage.php");
?>
</div>

</body>
</html>