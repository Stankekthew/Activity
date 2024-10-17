<?php
include "DB.php"; 

$db = new DB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student = new Student(
        
        $_POST      ['Id_No'], 
        $_POST      ['Last_Name'], 
        $_POST      ['First_Name'], 
        $_POST      ['Age'], 
        $_POST      ['Course'], 
        $_POST      ['Address']
    );

    $db = new DB();
    $db->insert($student);

    header("Location: index.php");
    exit();
}
    
?>


<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta name  ="viewport" content ="width=device-width, initial-scale=1.0">

    <title> Add Student </title>


</head>

<body>

    <?php include "navbar.php"; ?>

    <form action="add_student.php" method="POST">
            

        <label for  ="Id_No">ID No.:            </label>
        <input type ="number"   id  ="Id_No"        name="Id_No"        required>   <br>

            
        <label for  ="Last_Name">Last Name:     </label>
        <input type ="text"     id  ="Last_Name"    name="Last_Name"    required>   <br>

            
        <label for  ="First_Name">First Name:    </label>
        <input type ="text"     id  ="First_Name"   name="First_Name"   required>   <br>

            
        <label for  ="Age">Age:                 </label>
        <input type ="text"     id  ="Age"          name="Age"          required>   <br>

            
        <label for  ="Course">Course:           </label>
        <input type ="text"     id  ="Course"       name="Course"       required>   <br>

            
        <label for  ="Address">Address:         </label>
        <input type ="text"     id  ="Address"      name="Address"      required>   <br>

            
        <input type ="submit"    value  ="Submit">
            
    </form>

        
 </body>

</html>