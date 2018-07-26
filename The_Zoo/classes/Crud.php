<?php

include_once 'DbConfig.php';
session_start();
class Crud extends DbConfig
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function getData($query)
    {        
        $result = mysqli_query($this->connection,$query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command:  ' . mysqli_error($this->connection);
            return false;
        } 
        
        $rows = array();
        
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }
        
        return $rows;
    }
        
    public function execute($query) 
    {
        $result = mysqli_query($this->connection,$query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command:  ' . mysqli_error($this->connection);
            return false;
        } else {
            echo "<script>alert('Data inserted successfully')</script>";
            return true;
        }        
    }
    
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = mysqli_query($this->connection,$query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }

    /*** for login process ***/
        public function login($sql){
            
            //checking if the username is available in the table
            $result = mysqli_query($this->connection,$sql);
            $user_data = mysqli_fetch_array($result);
            $count_row = $result->num_rows;
            if ($count_row == 1) {
                // this login var will use for the session thing
                $_SESSION['login'] = true;
                $_SESSION['id'] = $user_data['id'];  
                $_SESSION['name'] = $user_data['name'];  
                $_SESSION['email'] = $user_data['email']; 
                return true;
            }
            else{
                return false;
            }
        }

 
     public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }

}
?>