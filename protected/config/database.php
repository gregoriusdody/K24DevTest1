<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql:'.dirname(__FILE__).'/../data/schema.mysql.sql',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=K24',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	
);