<?php
        //including the database connection file
        require_once('Crud.php');

        $crud = new Crud();

        if(isset($_POST['Submit'])) {    
        $tag = $_POST['tag'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $Bweight = $_POST['Bweight'];
        $foodC = $_POST['foodC'];
        $amount = $_POST['amount'];
        $Animal = implode(",",$_POST["Animal"]);
        $Bird = implode(",",$_POST["Bird"]);
        $textarea = $_POST['textarea'];

        $sql = "INSERT INTO animalinfo (tag, gender, birthday, age, Bweight, foodC, amount, Animal, Bird, textarea) VALUES('$tag', '$gender', '$birthday', '$age', '$Bweight', '$foodC', '$amount', '$Animal', '$Bird', '$textarea')";
        $result = $crud->execute($sql);
        if($result){
                header("location:display.php");
        }

}

?>