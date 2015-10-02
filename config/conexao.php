<?php
	global $_mysqlhost;
	global $_mysqluser;
	global $_mysqlpass;
	global $db_homepage; 
	
	$db_homepage = 'pilates';
	$_mysqlhost = 'localhost';
	$_mysqluser = 'root';
	$_mysqlpass = '';	
	$_mysqltimeout = 250;

	function sessao(){
		if(!$_SESSION)
			return false;
		else
			return true;
	}
?>