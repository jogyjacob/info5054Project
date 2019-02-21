<?php
/**
 * Created by PhpStorm.
 * User: pedro froes
 * Date: 20/02/2019
 * Time: 22:44
 */

//Include the configuration Database
include "dbcon.php";

    global $db;
    // here it is a query to call the categories
    $query = "SELECT name FROM category_master";


    //Fetch the data
    if ($query->num_rows > 0){

        while($row = $query->fetch_assoc()){

            echo $row['name'] . "<br/>";

        }
    }


