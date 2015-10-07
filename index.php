<!DOCTYPE html>
<html>
<head>
	<title>Emre Dundar Kivanc - Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<style>	
		body {background-color: #86B780}
		h1 {text-align:center;}
		h3 {text-align:center;}
		h4 {
			text-align:center;
			font-family:courier;
			}
		form{text-align:center;}]
		.container {
			width:50%;
			min-width:600px;
			margin-bottom:50px;
		}	
		p {text-align:center;}
	</style>
</head>
<body>
	<div class="container">
	<h1>Password Generator</h1>
	<h3>Choose the number of words for your password below.</h3>
	<h4>
	<?php
	$filename = "corncob_lowercase.txt";
	$symbols = "#$@%!&=";
	$word_list = file($filename, FILE_IGNORE_NEW_LINES);
	$words = $_POST['words'];
	$output = [];
	for($i=0; $i < $words; $i++){
		array_push($output, $word_list[rand(0,count($word_list))]);
	}
	$password = implode("-", $output);
	if(isset($_POST['inc_symbol'])){
		$password .= $symbols[rand(0,strlen($symbols)-1)];
	}
	if(isset($_POST['inc_number'])){
		$password .= rand(0,9);
	}
	echo $password
	//for loop here from input with output function words
	?>
	</h4>
	</div>
	<form method='POST' action='index.php'>
		<br>
		<input type="number" name="words" min="1" max="9" value="0"><br>
		<input type="checkbox" name="inc_symbol" value="" /> Include special symbol<br>
		<input type="checkbox" name="inc_number" value="" /> Include a number<br>
		<input class="button" type='submit' value='Generate!'>
	</form>
	<br><br>
	<p>
	Passwords using meaningful chunks like words are easier to remember than strings of arbitrary random characters.<br>
	This tool helps generate a password thats easier to remember. <br>
	Just choose a number of words and fiddle with the self explanatory options!<br>
	See also: <a href='http://xkcd.com/936/'>xkcd comic on the subject</a><br>
	</p>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>