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
		.container {
			width:50%;
			min-width:600px;
			margin-bottom:50px;
		}	
		img {
			display:block;
			margin:auto;
			width:50%;
		}
		p {text-indent: 1.5em;}
	</style>
</head>
<body>
	<pre>
    <?php print_r($_POST); ?>
	</pre>
	<div class="container">
	<h1>Password Generator</h1>
	<h3>Input the number of words you would like the password to contain in the field provided then submit.</h3>
	
	</div>
	<?php
	$filename = "corncob_lowercase.txt";
	$word_list = file($filename, FILE_IGNORE_NEW_LINES);
	$words = $_POST['words'];
	$output = [];
	for($i=0; $i < $words; $i++){
		array_push($output, $word_list[rand(0,count($word_list))]);
	}
	print_r($output);
	echo $words;
	//for loop here from input with oputput function words
	?>
	<form method='POST' action='index.php'>How many words would you like in your password?
		<input type="number" name="words" min="1" max="9" value="0">
		<br>
		<input class="button" type='submit' value='Generate!'>
	</form>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
