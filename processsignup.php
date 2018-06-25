<?php
session_start();

require 'db.php';

 $signusername=addslashes($_POST['su']);
  $signfn=addslashes($_POST['sf']);
  $signln=addslashes($_POST['sl']);
  $signsex=addslashes($_POST['ss']);
  $file = addslashes(file_get_contents($_FILES["signprofile"]["tmp_name"])); 
  $signemail=addslashes($_POST['se']);
  $signpassword1=addslashes($_POST['sp1']);
   

if ($con) {
		if (!empty($signfn) ) {
 
			 $sql = "INSERT INTO tbuser(username,fn,ln,sex,profilepic,email,password,usertype) VALUES ('$signusername','$signfn','$signln','$signsex','$file','$signemail','$signpassword1','User')";   
			
			if (mysqli_query($con, $sql))
				echo "Success";
			else
				echo "Failed";
		}
		mysqli_close($con);
	}
	else
		die(mysqli_connect_error());
?>