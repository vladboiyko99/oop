<?php

class Db{

public $db;

public function __construct ($host,$user,$pass,$db){
	
	$this->db = mysqli_connect ("$host","$user","$pass","$db") or die ("ERORR");
	mysqli_set_charset ($this->db,"UTF8") or die ("ERORR");
	
}

public function get_all_db (){
	
	$result = mysqli_query($this->db,'SELECT * from mess');
	//var_dump ($result);
	$myrow = mysqli_fetch_all ($result,MYSQL_ASSOC);
	
	return $myrow;
	
}
public function db_add($post){
	mysqli_query($this->db, "insert into mess (user,text) values ('$post[login]','$post[text]')");
	header('location: index.php');
	
}

}



?>