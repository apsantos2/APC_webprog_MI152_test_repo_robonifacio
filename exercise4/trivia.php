<html>
<head>
<title>My Trivia Page</title>
<style>
a {
 text-decoration: none;
}

a:hover {
 opacity: 0.7;	
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

#myself {
	display: none;
}

#Hobbies {
	display: none;
}

#Interest {
	display: none;
}
</style>
<script>
var divs = ["myself","Hobbies","Interest"];
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
<a href="mypage.php" style="color: white;">CLICK ME TO GO BACK</a>
</div>

<button type="button" onClick="toggleVisibility('myself');return false;" style="margin-top: 20px;margin-left: 320px;">About Me</button>
<button type="button" onClick="toggleVisibility('Hobbies');return false;" style="margin-left: 240px;">Hobbies</button>
<button type="button" onClick="toggleVisibility('Interest');return false;" style="margin-left: 230px;">Interest</button>

	<p id="myself" style="font-size: 18px; color: white; margin-left: 50px;margin-top: 100px;">
	<b>What am I afraid of ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I'm afraid of revealing too much about myself, in fear of being disliked.<br><br>
	<b>What is my favorite Foods ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I like eating burger and lasagna.<br><br>
	<b>What is my 	favorite Pastime ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I'm designing website and playing games.<br><br>
	<b>What is my favorite Animals ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I really like dogs and cats with breed.<br><br>
	<b>What is my favorite music genre ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I like reggae music because of being relax while listening.
	</p>
	
	<p id="Hobbies" style="font-size: 18px; color: white; margin-left: 50px;margin-top: 100px;">
	<b>Why I like reading books ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Because I'm thinking that the story is real.<br><br>
	<b>What is my favorite book genres ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I really like romance and drama.<br><br>
	<b>Why I like cooking ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Because my father is a chef and he is very good at cooking.<br><br>
	<b>What food I like to cook ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp I like cook sisig tofu and onion rings.<br><br>
	<b>Why I like reading books and cooking ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp These two are good combination because after you cook. You will read books while eating the food you cooked.
	</p>
	
	<p id="Interest" style="font-size: 18px; color: white; margin-left: 50px;margin-top: 100px;">
	<b>Why I like playing basketball ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Because I like shooting in the ring and playing with friends.<br><br>
	<b>What is my position in basketball ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Point Guard because I'm a good passer.<br><br>
	<b>Why I like playing volleyball ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Because I like spiking the ball and having own technique.<br><br>
	<b>What is my position in volleyball ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Setter/Libero because this is my favorite position.<br><br>
	<b>Why I really like this sports ?</b><br>
		 &nbsp&nbsp&nbsp&nbsp&nbsp Because I can lose weight while playing basketball and volleyball.<br><br>
	</p>
</body>
</html>