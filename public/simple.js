$(document).ready(function(){
//______begin readyShell
var game = {
	simonSequence: [] //emply array to push computer choices to
}
function selectAnimation(element) {
	$(element).animate({
		opacity:"1",
		width: "70%"
	}, {
		duration: 200
	}).animate({
			opacity: ".7",
			width: "50%"
		}, {
			duration: 200
		});
	// others
	$(".classSnail:not(#" + $(element).attr("id") + ")").animate({
		opacity: ".1"
	}, {
		duration: 200
	}).animate({
			opacity: ".7"
		}, {
			duration: 200
		});
	// end others
};

function selectAnimationClick(element) {
	$(element).click(function(){
		selectAnimation(element);
		runGame(element);
	});
};
selectAnimationClick("#redSnail")
selectAnimationClick("#greenSnail")
selectAnimationClick("#blueSnail")
selectAnimationClick("#purpleSnail")
//begin randomChooser
function randomChooser() {
	game.simonSequence.push(Math.floor(Math.random() * 4) + 1)
	console.log(game.simonSequence);
	setTimeout(function(){
		mineTurnIndicator();
	}, 200)
	setTimeout(function(){
		animateArray();
	}, 1500)
};
$("#startButton").on("click", function() {
	randomChooser();
});
$("#stopButton").on("click", function() {
	game.simonSequence = [];
});
//end randomChooser
//begin simonSequence display
function animateArray() {
	game.simonSequence.forEach(function(element, index, array) {
	setTimeout(function(){
		selectAnimation('[data-id="' + element + '"]');
	}, 500 * index);
	setTimeout(function(){
		yourTurnIndicator();
	}, 600 * game.simonSequence.length);
});
};
//end simonSequence display
function mineTurnIndicator() {
	$("#mineTurn").removeClass("turnHighlighterOff").addClass("turnHighlighter");
	$("#yourTurn").removeClass("turnHighlighter").addClass("turnHighlighterOff");
};
function yourTurnIndicator() {
	$("#yourTurn").removeClass("turnHighlighterOff").addClass("turnHighlighter");
	$("#mineTurn").removeClass(".turnHighlighter").addClass("turnHighlighterOff");
};
var i = 0
var roundMarker = 1
function runGame (element) {
	var userChoice = $(element).attr("data-id");
	var compChoice = game.simonSequence[i]
	if (userChoice == compChoice) {
		i++;
	} else {
		alert("Ya blew it!");
		i = 0;
		game.simonSequence = [];
		roundMarker = 1;
		$("#round").html(roundMarker);
	};
		if ((i == game.simonSequence.length) && userChoice == compChoice) {
			randomChooser();
			i = 0;
			roundMarker ++;
			$("#round").html(roundMarker);
	};
};
//____________________________end readyShell
});