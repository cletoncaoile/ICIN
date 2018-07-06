<?php
	session_start();

	require 'db.php';
	$varloguser = $_POST['lu'];
	$varlogpassword = $_POST['lp'];

	
	if ($con) {
		if (!empty($varloguser) && !empty($varlogpassword)) {

			$sql = "SELECT * FROM tbuser WHERE BINARY username='".$varloguser."' AND BINARY password='".md5($varlogpassword)."'";
			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) {
				while($row=mysqli_fetch_row($result)){
					$_SESSION['logusername'] = $row[0];
					if($row[7]=="User"){
						echo "Success";
					}
					else if($row[7]=="Admin"){
						echo "Success1";
					}
				
			}
				
			}
			else
				echo "Failed";
		}
		mysqli_close($con);
	}
	else
		die(mysqli_connect_error());
?>