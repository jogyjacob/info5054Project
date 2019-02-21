<?php
/**
 * Created by PhpStorm.
 * User: Pedro 
 * Date: 18/02/2019
 * Time: 22:14
 */

//Database configuration
	$host = 'localhost';
	$username = 'londoners';
	$password = 'London123!';
	$dbname = 'Londoners';
//Create connection
	$db = new mysqli($host, $username, $password, $dbname);

//check connection
if($db->connect_error){
	die ("Connection failed: " . $db->connect_error);
}
?>
