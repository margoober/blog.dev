<!DOCTYPE html>
<?php
if ($randnumb == $guess) {
	$score = "RIGHT";
} else {
	$score = "WRONG";
}
?>
<html lang="en">
<head>
    <title>Try Your Luck!</title>
</head>
<body>
    <h1>You rolled a <?= $randnumb ?>!</h1>
    <h1>You guessed a <?= $guess ?>!</h1>
    <h2>You were <?= $score ?></h2>
</body>
</html>
