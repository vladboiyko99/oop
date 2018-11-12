<?php

class Add{
 public $post;
 public function __construct($post){
	 $this->post = $post;
	 $this->add($this->post);
 }

public function add($post){
	$db = new Db(HOST,USER,PASS,DB);
	$db->db_add($post);
}


}



?>