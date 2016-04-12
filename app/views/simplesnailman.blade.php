<!DOCTYPE html>
<html>
<head>
	<title>Simple Snailman</title>
	<link rel="stylesheet" type="text/css" href="/simple.css">
</head>
<body>
<div id="tableBorder">
<table id="tableTitle">
	<tr id="titleRow">
		<h1 id="title">Simple Snailman</h1>
	</tr>
	<tr class="subTitleRow">
		<h3 class="byLine">An Cutting-Edge Interactive Experience</h3>
	</tr>
	<tr>
		<td>
			<h3 class="byLine">Round: <span id="round">1</span><br><span id="yourTurn">Yourn Turn</span> ~ <span id="mineTurn">Mine Turn</span></h3><button id="startButton">Have A "Go" Of It</button>
			<button id="stopButton">God Make It Stop</button>
		</td>
	</tr>
	</table>
	<table id="tableSnails">
	<tr>
		<td class="tdSnail">
			<div class="content">
				<img id="redSnail" data-id="1" class="classSnail" src="/img/redSnail.png">
			</div>
		</td>
		<td class="tdSnail">
			<div class="content">
				<img id="greenSnail" data-id="2" class="classSnail" src="/img/greenSnail.png">
			</div>
		</td>
	</tr>
	<tr>
		<td class="tdSnail">
			<div class="content">
				<img id="blueSnail" data-id="3" class="classSnail" src="/img/blueSnail.png">
			</div>
		</td>
		<td class="tdSnail">
			<div class="content">
				<img id="purpleSnail" data-id="4" class="classSnail" src="/img/purpleSnail.png">
			</div>
		</td>
	</tr>
</table>
<br>
<br>
<br>
<button id="donate"><a href="http://landsnails.weebly.com/">Donate To Snail Rescue</a></button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="/simple.js">
/*How to illumnate the snails:
	turn on layers as needed
	change opacity to 1
	change the css color
	setTimeOut(function() {
		turning off the illumination
	}, delay);
	illuminate button on user click
	illumnation button on simon move

create variable for empty arrays (simonSequence, userSequence)
compare user-choice to simon-choice
play/animate each simonSequence
	*/
</script>
</body>
</html>