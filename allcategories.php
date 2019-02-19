<?php
	// include the connection to the db such as username password etc
	include ('dbcon.php');
	// create the query Performs a query on the database
	$qry = mysqli_query($con, "SELECT * FROM category_master");
	while ($row = mysqli_fetch_assoc($qry)) {
        echo "<h1>".$row['category_title']."</h1>";
    }
?>
