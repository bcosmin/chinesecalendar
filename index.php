<?php
	
	if (isset($_POST['submit'])) {
	    function chineseZodiac ($y) {
			switch (($y - 4) % 12) {
				case  0: return 'Rat';
				case  1: return 'Ox';
				case  2: return 'Tiger';
				case  3: return 'Rabbit';
				case  4: return 'Dragon';
				case  5: return 'Snake';
				case  6: return 'Horse';
				case  7: return 'Goat';
				case  8: return 'Monkey';
				case  9: return 'Rooster';
				case 10: return 'Dog';
				case 11: return 'Pig';
			} 
		}
	} 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Chinese calendar</title>

	<style type="text/css">
		
	.wrap {
		width: auto;
		height: auto;
		text-align: center;
	}

	.insert {
		width: 50%;
		height: 50%;
		background-color: rgb(255, 255, 153);
		padding: 20px;
		margin-right: auto;
		margin-left: auto;
		margin-top: 30px;
	}

	.formInput {
		width: 250px;
		/*height: 50px;*/
		font-size: 2em;
		border: none;
		padding: 3px;
	}

	.btn {
		font-size: 2em;
		font-family: Arial;
		color: white;
		width: 150px;
		/*height: 50px;*/
		background-color: rgb(0, 153, 204);
		border: none;
		padding: 3px;
	}
	.text {
		font-family: Arial;
		font-size: 1em;
		color: grey;
	}

	.show {
		font-family: Arial;
		font-size: 2em;
		color: black;
		padding-top: 10px;
		text-align: center;
	}

	h1 {
		font-family: Arial;
		size: 2em;
	}

	</style>
</head>
<body>
<div class="wrap">
	<h1>Chinese Calendar</h1>
	<p class="text">
		Please fill the form and after click the SEND button, you will see the chinese year.
	</p>
	<div class=insert>
	<form method="post">
		<input class="formInput" type="text" name="year" id="year">
		<input class="btn" type="submit" name="submit" id="submit" value="Send">
		
	</form>
	<p class="show">

			<?php 

			if (isset($_POST['year']) && !empty($_POST['year'])) {
				$show = chineseZodiac($_POST['year']);
				echo "The chinese year is: ".$show;
			}
			
			?>
			
		</p>
	</div>
</div>

</body>
</html>