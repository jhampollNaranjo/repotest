<?php
		require_once("../model/db.php");
		
		require_once("../model/model.php");
	

	if (isset($_GET['id'])) {
		$user=new user_model();
		$user->delete_user($_GET['id']);
		header('location:../view/view.php');
	}else{
		$per=new user_model();
		$datos=$per->get_personas();
	}

	if (isset($_POST['submitted'])) {
		$datos=new user_model();
		$datos->add_user($_POST['name'],$_POST['last_name']);
		header('location:../view/view.php');
		
	}

?>
