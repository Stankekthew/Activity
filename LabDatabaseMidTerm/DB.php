<?php

class DB {

    private $con;  


    public function __construct() {
    
        $this->con = mysqli_connect("localhost", "root", "", "ite601");

        if (mysqli_connect_errno()) {
            
            die("Connection failed: " . mysqli_connect_error());
        
        }
    }


    public function get() {

        $sql = "SELECT * FROM users";

        return mysqli_query($this->con, $sql);  
    }


    public function insert($Id_No, $Last_Name, $First_Name, $Age, $Course, $Address) {

        $sql = "INSERT INTO users (Id_No, Last_Name, First_Name, Age, Course, Address) 
        
                VALUES ('$Id_No', '$Last_Name', '$First_Name', '$Age', '$Course', '$Address')";
        
        $result = mysqli_query($this->con, $sql);

        if (!$result) {

            die("Error inserting data: " . mysqli_error($this->con)); 

        }
    }


    public function delete($id) {

        $sql = "DELETE FROM users WHERE Id_No = '$id'";

        $result = mysqli_query($this->con, $sql);

        if (!$result) {

            die("Error deleting data: " . mysqli_error($this->con));

        }
    }


    public function __destruct() {

        mysqli_close($this->con);  

    }
}

?>
