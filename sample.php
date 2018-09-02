<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pagination</title>
</head>
<body>
	<style type="text/css">
		
		#pageko:active{
			background-color: #00AF66;
		}

	</style>
<?php
// connect to database
$con = mysqli_connect('localhost','root','','icraftitnow');


// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database
$sql='SELECT * FROM tbcraft';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
$page = 1;
} else {
$page = $_GET['page'];
}

 $this_page_first_result = ($page-1)*$results_per_page;

 $sql='SELECT * FROM tbcraft WHERE LIMIT ' . $this_page_first_result . ',' . $results_per_page; $result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) {
echo $row['idcraft'] . ' ' . $row['namecraft']. '<br>';
}

// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
echo '<a href="?page=' . $page . '"><button id="pageko">' . $page . '</button></a> ';
}

?>
</body>
</html>