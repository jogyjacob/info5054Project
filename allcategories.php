<?php
/**
 * Created by PhpStorm.
 * User: trans
 * Date: 18/02/2019
 * Time: 22:06
 */


	include ('dbcon.php');
	$select = mysqli_query($con, "SELECT * FROM category_master");
	while ($row = mysqli_fetch_assoc($select)) {
        echo "<h1>".$row['category_title']."</h1>";
    }
?>