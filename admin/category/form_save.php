<?php
if(!empty($_POST)) {
	$id = getPost("id");
	$name = getPost("name");
	
	if($id > 0){
		$sql = "update Category set name = '$name' where id = $id";
		execute($sql);
	} else {
		$sql = "insert into Category(name) values ('$name')";
		execute($sql);
	}
}