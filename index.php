<?php
ob_start();

include "class/page.php";
include "class/add.php";
include "class/db.php";
include "conf.php";


$page = new Page ();
$page->render();
$add= new Add($_POST);


ob_flush();
?>