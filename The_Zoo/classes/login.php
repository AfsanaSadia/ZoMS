<?php
	//including the database connection file
	require_once('Crud.php');

	$crud = new Crud();

	if(isset($_POST['login'])) { 

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql="SELECT id from ereg WHERE email='$email' and password='$password' ";

        $user = $crud->login($sql);

        if ($user) {  
            // Login Success 
           header("location:../Animal.html");  
        } else {  
            // Login Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        }  
    }

?>