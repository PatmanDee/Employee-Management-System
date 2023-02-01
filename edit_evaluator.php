<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM evaluator_list where id = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'new_evaluator.php';
?>