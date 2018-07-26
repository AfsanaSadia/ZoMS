<?php  
    //including the database connection file
    require_once('Crud.php');  
    if(isset($_POST['logout'])){  
        // remove all session variables  
        session_unset();   
  
        // destroy the session   
        session_destroy();  
    }  
    if(!($_SESSION)){  
         header("location:../login.html");
         exit();
    }  

?>

<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <meta charset="UTF-8" />  
        <title>Welcome</title>     
    </head>  
    <body> 
                     
        <form name="login" method="post" action="">  
                    
            <h1>Welcome User</h1>   
                <!-- <p>   
                    <label for="email"> Your Name </label>  
                        <?php echo $_SESSION['name'];?>
                </p>  
                <p>   
                    <label for="password"> Your Email </label> 
                        <?php echo $_SESSION['email'];?>   
                </p>  --> 
                                   
                <p>   
                    <button type="submit" name="logout" value="Logout">Logout</button> 
                </p>  
                                   
        </form>  
    </body> 
</html> 