<?php
        //including the database connection file
       require_once('Crud.php');

        $crud = new Crud();

        if(isset($_POST['Update'])) { 
        $id = $_POST['id'];   
        $tag = $_POST['tag'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $Bweight = $_POST['Bweight'];
        $foodC = $_POST['foodC'];
        $amount = $_POST['amount'];
        $Animal = $_POST["Animal"];
        $Bird = $_POST["Bird"];
        $textarea = $_POST['textarea'];

        $result = $crud->execute("UPDATE animalinfo SET tag='$tag',gender='$gender',birthday='$birthday',
        age='$age',Bweight='$Bweight',foodC='$foodC',amount='$amount',Animal='$Animal',Bird='$Bird',textarea='$textarea' WHERE Id=$id");
        if($result){
                header("location:display.php");
                }

        }

?>