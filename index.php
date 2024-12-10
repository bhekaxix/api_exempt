<?php

// Importing content from an external file
//require_once "classes/layout.php";
//require_once "contents/contents.php";
require_once "Autoload.php";

// Creating an instance of a class
//$ObjLayout = new layout();
//$ObjContent = new contents();

// Invoke a method
$ObjLayout->heading();
$ObjContent->index_content();
$ObjLayout->footer();