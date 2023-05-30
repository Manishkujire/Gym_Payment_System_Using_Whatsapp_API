<?php
ob_start();
session_start();
define('DB_SERVER', "sql301.epizy.com"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "epiz_33668131"); // database user name eg. root
define('DB_DATABASE', "epiz_33668131_gym"); //database name
define('DB_PASSWORD', "pXup7zlkxXd4ro"); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc
spl_autoload_register(function($class){
    require_once('app/'.$class.'.php');
});