<?php

session_start();

define("BU","http://localhost/work/php-0.1/");
define("BUA","http://localhost/work/php-0.1/admin/");
define("ASSETS","http://localhost/work/php-0.1/assets/");
define("BL",__DIR__."/");
define("BLA",__DIR__."/admin/");

//connect to database

require_once(BL.'function/db.php');