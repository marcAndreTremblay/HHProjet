<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

    if(isset($_POST['submit']))
	{
	
	
		debug_to_console("OnSummit");

		$servername = "localhost:3306";
		$username = "root";
		$password = "root";
		$dbname = "HQDB";


		$conn = mysqli_connect($servername, $username, $password, $dbname);

		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}

		

	
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$mont = $_POST['mont'];
		$lname = $_POST['lname'];
		
		debug_to_console(".$fname.");

		
		$sql = "INSERT INTO `hqdb`.`participant`(`First_Name`,`Last_Name`,`Street_Name`,`Street_Number`,`Telehpone`,`Email`,`Montagne_id`,`Participation_cout`)
						VALUES('".$fname."','". $lname."','',0,'','".$email."',1,1);";
		
		
		
		if (mysqli_query($conn, $sql)) 
		{
    		echo "New record created successfully";
			
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	
	
?>