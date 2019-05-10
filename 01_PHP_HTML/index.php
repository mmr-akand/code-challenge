<?php

require_once 'table_generator.php';

/*
create an instance of the TableGenerator class and assign some properties
*/
$tableGeneratorObj = new TableGenerator( array(  
	    array("Language Name", "Designed By", "First Appeared"), // table headers
	    array("PHP", "Rasmus Lerdorf", "1995"), 
	    array("Python", "Guido van Rossum", "1990"),  
	    array("Java", "	James Gosling", "1995") ,
	    array("JavaScript", "Brendan Eich", "1995"),
	    array("Ruby", "	Yukihiro Matsumoto", "1995")
	)
);

//display the table
echo $tableGeneratorObj->displayAsTable();