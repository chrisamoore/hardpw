<html>
<head>
<title>Testing Validation</title>
</head>
<body>
	<?php
		// set vars to data from index
		$var = $_POST['uid'];
		$var = $_POST['password'];
		$var = $_POST['verify'];
		
		
		
		//Will eventuall come in as POST data
		$username = "poop";
		$sequence = explode("-","160-200-153");	//Time (ms) between keystrokes, first character omitted.
												//Splitting for easy looping
		$password = "pass";

		//Will eventually be stored in DB
		$tolerance = 10;	//Can be +/- 10 ms on keystroke timings
		$usernameDB = "poop";
		$sequenceDB = explode("-","169-200-153");	//Time (ms) between keystrokes, first character omitted.
													//Splitting for easy looping
		$passwordDB = "pass";
		
		$is_valid_sequence = true;

		//Check differences on times, should not exceed tolerance.
		for ($i = 0; $i < count($sequence); $i++){
			if(abs($sequenceDB[$i] - $sequence[$i]) >= $tolerance)
				$is_valid_sequence = false;
		}

		echo $is_valid_sequence;
		//Checking username and password is trivial.
		
		
	?>
	</div>
</body>
</html>
