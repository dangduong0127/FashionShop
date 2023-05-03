<?php
  	session_start();
    require_once('../../utils/utility.php');
    require_once('../../database/dbhelper.php');

    $user = getUserToken();
    if($user == null) {
        die();
    }

    if(!empty($_POST)){
    	
    	$action = getPost('action');

    	switch ($action) {
            case 'delete';
                deleteFb();
                break;
    	}
    }

    function deleteFb() {
        $id = getPost('id');
        $updated_at = date("Y-m-d H:i:s");
        $sql = "delete from Feedback where id = $id";
        execute($sql);
    }