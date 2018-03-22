<?php
$serverName="localhost";//server is located at localhost itself 
$dbusername="root";//database user name is set to root  
$dbpassword="";//password is null for database access
$dbname="ExpenseManager";//the database file that is used to create all of the tables is bank_db.sql so database name is also exactly the same to access the data
mysql_connect($serverName,$dbusername,$dbpassword);//inbuilt function to access the database in PHP
mysql_select_db($dbname) or die(mysql_error());//in case of maintainance 
?>
