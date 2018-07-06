<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
function connect() {
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "icraftitnow";
  $con = mysqli_connect($hostname, $username, $password, $dbname);	
  return $con;
 
}

function getRatingByProductId($con, $noofrating) {
 $idcraft=$_GET['id'];
	$query = "SELECT SUM(noofrating) as noofrating, COUNT(noofrating) as count from tbrating WHERE idcraft = '$idcraft'";

      $result = mysqli_query($con, $query);
      $resultSet = mysqli_fetch_assoc($result);
      if($resultSet['count']>0) {
      	return ($resultSet['noofrating']/$resultSet['count']);
      } else {
      	return 0;
      }
	
}
if(isset($_REQUEST['type'])) {
	if($_REQUEST['type'] == 'save') {
		$noofrating = $_REQUEST['noofrating'];
		$idcraft = $_GET['idcraft'];
	      $query = "INSERT INTO tbrating (noofrating,idcraft ) VALUES ('$noofrating','$idcraft' )";
	      // get connection
	      $con = connect();
	      $result = mysqli_query($con, $query);
	      echo 1; exit;
	} 
}

?>
