<?php
	//including the database connection file
	require_once('Crud.php');
	$crud = new Crud();

    $id = $crud->escape_string($_GET['id']);
    
    $table = "animalinfo";


    $result = $crud -> delete($id,$table);

    if($result){
        header('location:display.php');
    }

?>