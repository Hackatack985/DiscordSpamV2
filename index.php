<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito|Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
<title>Discord Spammer - TimsLab</title>
</head>
<img class="center" src="css/logo.png" alt="TimsLab">
<body onLoad="function type_text() {

}
type_text()" ; bgColor=Black text=#00FFFF>
<div style="width: 600px;height: 100px;" align="center">
</div>
<div style="text-align: center;">
<p id="response"></p>
<p id="sending">Loading Stats...</p>
<button class="button" onclick="load()">Load Tokens</button>
<br>
    <label for="invite"></label><input type="message1" id="invite" placeholder="4hFx9XU"><br>
<button class="button" onclick="join();">Join Server</button>
<br>
    <label for="id"></label><input type="message" id="id" placeholder="724386765091373096*">
    <label for="message"></label><input type="message" id="message" placeholder="RIP*"><br>
<button class="button" onclick="spam();">Send Message</button>
    <h6 class="made">Made by <a href="https://github.com/TimsLab">TimsLab</a></h6>
<script type="application/javascript">
document.getElementById("sending").style.visibility = "hidden";
document.getElementById("response").style.visibility = "hidden";


function load() {
  document.getElementById("sending").style.visibility = "visible";

  //request
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState === 4 && this.status === 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("load=1337");
}

function join() {
  document.getElementById("sending").style.visibility = "visible";
  
  var invite = document.getElementById('invite').value;
  
  //request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	if (this.readyState === 4 && this.status === 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("join=" + invite);
}

function spam() {
  document.getElementById("sending").style.visibility = "visible";

    const id = document.getElementById('id').value;
    const message = document.getElementById('message').value;

    //request
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("channelid=" + id + "&message=" + message);
}

</script>
</html>
