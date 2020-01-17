<?php

/**
 * Configuration for database connection
 * Author: 
*/

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "regstudent"; 

$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );