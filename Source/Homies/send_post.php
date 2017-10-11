<?php
    if(isset($_POST['submit']))
	{
	


		$servername = "MySQL1";
		$username = "root";
		$password = "root";
		$dbname = "HQDB";


		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$mont = $_POST['mont'];


		$sql = "INSERT INTO `hqdb`.`participant`(`Participant_id`,`First_Name`,`Last_Name`,`Street_Name`,`Street_Number`,`Telehpone`,
						`Email`,
						`Montagne_id`,
						`Participation_cout`)
						VALUES
						(<{Participant_id: }>,
						<{First_Name: }>,
						<{Last_Name: }>,
						<{Street_Name: }>,
						<{Street_Number: 0}>,
						<{Telehpone: }>,
						<{Email: }>,
						<{Montagne_id: 0}>,
						<{Participation_cout: 1}>);";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
			
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	
	
?>