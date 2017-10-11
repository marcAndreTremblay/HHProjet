<?php
    	if(isset($_POST['submit']))
	{

		$servername = "localhost";
		$username = "jftremblay";
		$password = "_Jf1470$$$";
		$dbname = "JFTremblay_personal";


		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$mont = $_POST['mont'];

		$sql = "INSERT INTO Participants (fname, lname, email, mont) VALUES ('$fname', '$lname', '$email', '$mont')";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
			
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	
	
?>