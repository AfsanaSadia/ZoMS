<?php
        //including the database connection file
        require_once('Crud.php');

        $crud = new Crud();

        if(isset($_POST['Submit'])) {    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $designation = $_POST['designation'];
        $wArea = $_POST['wArea'];

        $sql = "INSERT INTO ereg (name, email, password, age, gender,mobile, designation, wArea) VALUES('$name','$email','$pass','$age','$gender','$mobile','$designation','$wArea')";
        $crud->execute($sql);

}

?>

<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <meta charset="UTF-8" />  
           
    </head>  
    <body>               
        <a href="../EmployeeRegistration.html">New Registration</a>
    </body> 
</html> 
