<?php

class Page{

public function render (){
	
	$db = new Db (HOST,USER,PASS,DB);
	$myrow = $db->get_all_db ();
	
	include "wive.php";
	
	
}



}



?>